$(function(){

    $('#search').on('keyup', function () {

        let search = $(this).val();
        const ajax = true;

        $.ajax({
            url: '/home/search',
            type: 'POST',
            async: true,
            data: {search:search, ajax:ajax},
            success: function (data) {

                if(data !== ''){

                    $('#search-section > ul').html(data).show();
                    $('.data').hide();

                    $('#search-section').find('a').on({

                        mouseenter: function(){
                            $(this).css({
                                backgroundColor: 'rgba(220,220,220, 0.6)',
                                cursor: 'pointer',
                                width: '226px'
                            });
                        },
                        mouseleave: function () {
                            $(this).css('background-color', 'white')
                        },
                        click: function (event) {

                            event.preventDefault();

                            $('#search').val($(this).text()).focus();
                            id = $(this).attr('href');
                            $('#search-section > ul').html(data).hide();


                            /*$.ajax({
                                url: 'data.php',
                                type: 'POST',
                                async: true,
                                data: {id:id},
                                success: function (data) {

                                    if(data !== ''){

                                        $('.data').html(data).show();

                                    }else{

                                        $('.data').html('Aucune information sur ' + search);

                                    }
                                }
                            });*/
                        }
                    });

                }else{

                    $('.result').add('.data').hide();
                }
            }
        });

    });
});