$(function(){

    var error_email = false;

    function alertMessage(id, errorClass, text) {

        return $(id).next(errorClass).html(text).show();
    }

    $(document).on('keyup', '#email', function () {

        var email = $(this).val();
        var filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if(email === ''){

            alertMessage(this, '.error', 'Entrer votre e-mail');
            error_email = false;
        }else if(!email.match(filter)){

            alertMessage(this, '.error', 'Votre e-mail est incorrect');
            error_email = false;

        }else{

            $.ajax({
                url: 'Utils/token_for_reset.php',
                type: 'POST',
                dataType: 'json',
                async: true,
                cache: false,
                data: $(this).serialize(),
                success:function (data) {

                    if(data.errors){

                        $('.error').html(data.errors).show();
                        error_email = false;

                    }else{

                        $('.error').hide();
                        error_email = false;
                        window.location.href = 'verify_code.php?email='+ email;
                    }
                }
            });


        }
    });

    $(document).on('submit', '#reset-password', function(){
        var form = $(this);
        var email = form.find('#email').val();

        if(error_email === false){

            if(email === ''){

                $('.error').html('Taper votre e-mail de récuperation').show();
            }
            return false;
        }else{

            return false;
        }
    });
});