$(function () {

    var search = window.location.search;
    var data = search.split('=');
    var email = data[1];

    var error_code = false;
    function alertMessage(id, errorClass, text) {

        return $(id).next(errorClass).html(text).show();
    }

    $(document).on('keyup', '#code', function () {
        var code = $(this).val();
        var filter = /^[0-9]+$/i;
        if(code === ''){

            alertMessage(this, '.error', 'Entrer votre code');
            error_code = false;

        }else if(!code.match(filter)) {

            alertMessage(this, '.error', 'Votre code est composé uniquement des chiffres');
            error_code = false;

        }else{

            $.ajax({
                url: 'Utils/check_token.php',
                type: 'POST',
                dataType: 'json',
                cache: false,
                data:{email:email, code:code},
                success: function (data) {

                    if(data.errors){

                        $('.error').html(data.errors).show();
                        error_code = false;
                    }else{

                        $('.error').hide();
                        error_code = false;
                        window.location.href = 'reset_password.php?email='+email;
                    }
                }
            });
        }

    });

    $(document).on('submit', '#formCode', function () {

        var form = $(this);
        var code  = form.find('#code').val();

        if(error_code === false){

            if(code === ''){

                $('.error').html('Saisissez votre code').show();
            }
            return false;
        }else{

            return false;
        }
    });
});