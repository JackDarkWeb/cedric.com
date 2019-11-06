$(function(){

    var error_first_name = false, error_email = false, error_confirm_email = false, error_last_name = false, error_message = false, error_company = false;

    function alertMessage(id, errorClass, text) {

        return $(id).next(errorClass).html(text).show();
    }

    $(document).on('keyup', '#first_name', function () {

        var first_name = $(this).val();
        var filter = /^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/i;

        if(first_name === ''){

            alertMessage(this, '.error-first_name', 'Taper votre  prénom');
            error_first_name = false;

        }else if(!first_name.match(filter)){

            alertMessage(this, '.error-first_name', 'Caractères non autorisé');
            error_first_name = false;


        }else if(first_name.length < 3){

            alertMessage(this, '.error-first_name', 'Taper 3 caractères au moins');
            error_first_name = false;

        }else{

            $('.error-first_name').hide();
            error_first_name = true;
        }
    });

    $(document).on('keyup', '#last_name', function () {

        var last_name = $(this).val();
        var filter = /^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/i;

        if(last_name === ''){

            alertMessage(this, '.error-last_name', 'Taper votre  nom');
            error_last_name = false;

        }else if(!last_name.match(filter)){

            alertMessage(this, '.error-last_name', 'Caractères non autorisé');
            error_last_name = false;

        }else if(last_name.length < 3){

            alertMessage(this, '.error-last_name', 'Taper 3 caractères au moins');
            error_last_name = false;

        }else{

            $('.error-last_name').hide();
            error_last_name = true;
        }
    });


    $(document).on('keyup', '#message', function () {

        var message = $(this).val();

        if(message === ''){

            alertMessage(this, '.error-message', 'Taper votre  message');
            error_message = false;

        }else if(message.length < 10){

            alertMessage(this, '.error-message', 'Taper 10 caractères au moins');
            error_message = false;

        }else{

            $('.error-message').hide();
            error_message = true;
        }
    });


    $(document).on('keyup', '#company', function () {

        var company = $(this).val();

        if(company === ''){

            alertMessage(this, '.error-company', 'Taper votre  message');
            error_company = false;

        }else if(company.length < 3){

            alertMessage(this, '.error-company', 'Taper 3 caractères au moins');
            error_company = false;

        }else{

            $('.error-company').hide();
            error_company = true;
        }
    });



    $(document).on('keyup', '#email', function () {

        var email = $(this).val();
        var filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if(email === ''){

            alertMessage(this, '.error-email', 'Entrer votre e-mail');
            error_email = false;
        }else if(!email.match(filter)){

            alertMessage(this, '.error-email', 'Votre e-mail est incorrect');
            error_email = false;

        }else{

            $('.error-email').hide();
            error_email = true;
        }
    });

    $(document).on('keyup', '#confirm-email', function () {

        var email         = $('#email').val();

        var confirm_email = $(this).val();

        if(confirm_email !== email){

            alertMessage(this, '.error-confirm_email', 'E-mails ne sont pas identiques');
            error_confirm_email = false;
        }else{

            $('.error-confirm_email').hide();
            error_confirm_email = true;
        }
    });



    $(document).on('submit', '#formContact', function (e) {
        e.preventDefault();

        let form = $(this),
            email         = form.find('#email').val(),
            confirm_email = form.find('#confirm-email').val(),
            last_name     = form.find('#last_name').val(),
            first_name    = form.find('#first_name').val(),
            message       = form.find('#message').val(),
            company      = form.find('#compagny').val();

        let ajax = true;


        if (error_email === false || error_first_name === false || error_last_name === false || error_message === false || error_confirm_email === false) {

            if (last_name === '') {

                $('.error-last_name').html('Votre nom est obligatoire').show();
            }
            if (first_name === '') {

                $('.error-first_name').html('Votre prénom est obligatoire').show();
            }
            if (email === '') {
                $('.error-email').html('E-mail est obligatoire').show();
            }
            if (confirm_email === '') {
                $('.error-confirm_email').html('Confirmez votre e-mail').show();
            }

            if (message === '') {
                $('.error-message').html('Message est obligatoire').show();
            }
            return false;

        }else{

            $.ajax({
                url:'/contact',
                method:'POST',
                dataType:'json',
                async: true,
                cache:false,
                data:{first_name:first_name,last_name:last_name,message:message,email:email,company:company,ajax:ajax},
                success:function (response) {

                    if(response.error === false){

                        $('.result').html(response.message);

                    }else{
                        $('.result').html(response.message);
                        $('#formContact').find('#last-name, #message, #email, #company, #first-name').val('');
                    }
                },
                error: function (resp, status, error) {
                    $('.result').html(error);
                    //console.log(resp);
                },
            });
            return false;
        }
    });

});