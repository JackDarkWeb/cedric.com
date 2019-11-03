$(function(){

    $('#search').on('keyup', function () {

        var search = $(this).val();

        $.ajax({
            url: 'search.php',
            type: 'POST',
            async: true,
            data: {search:search},
            success: function (data) {

                if(data != ''){

                    $('.result').html(data).show();
                    $('.data').hide();

                    $('.result').find('a').on({

                        mouseenter: function(){
                            $(this).css({
                                backgroundColor: 'rgba(220,220,220, 0.6)',
                                cursor: 'pointer',
                                width: '350px'
                            });
                        },
                        mouseleave: function () {
                            $(this).css('background-color', 'white')
                        },
                        click: function (event) {
                            event.preventDefault();
                            $('#search').val($(this).text()).focus();
                            id = $(this).attr('href');
                            $('.result').html(data).hide();

                            $.ajax({
                                url: 'data.php',
                                type: 'POST',
                                async: true,
                                data: {id:id},
                                success: function (data) {

                                    if(data != ''){

                                        $('.data').html(data).show();

                                    }else{

                                        $('.data').html('Aucune information sur ' + search);

                                    }
                                }
                            });
                        }
                    });

                }else{

                    $('.result').add('.data').hide();
                }
            }
        });

    });
});