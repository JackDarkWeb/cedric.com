$(function(){

    $(document).on('submit', '#formSingin', function (e) {
        e.preventDefault();

        let form  = $(this),
            email     = form.find('#email').val(),
            password  = form.find('#password').val(),
            remember  = 1;

        const ajax = true;

        $.ajax({
            url: '/user/singIn',
            type: 'POST',
            dataType: 'json',
            cache: false,
            data:{email:email, password:password, ajax:ajax, remember:remember},
            async :true,
            beforeSend: function () {
                $('.process').html('En cours de traitement ....').show();
            },
            success: function (data) {

                if(data.email){

                    $('.error-email').html(data.email).show();
                    $('.process, .error-pass').hide();

                }else if(data.password){

                    $('.error-pass').html(data.password).show();
                    $('.process, .error-email').hide();

                }else if(data.success){

                   window.location = '/dashboard';
                }

            }

        });

    });
});