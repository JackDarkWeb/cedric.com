$(function(){

    var error_first_name = false, error_email = false, error_last_name = false;

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

            $.ajax({
                url: 'Utils/checkChronicEmail.php',
                type: 'POST',
                dataType: 'json',
                async: true,
                cache: false,
                data: {email:email},
                success:function (data) {

                    if(data.email){

                        $('.error-email').html(data.email).show();
                        error_email = false;

                    }else{

                        $('.error-email').hide();
                        error_email = true;
                    }
                }
            });


        }
    });



    $(document).on('submit', '#formChronic', function () {

    var form = $(this);
    var first_name =  form.find('#first_name').val();
    var email = form.find('#email').val();
    var last_name = form.find('#last_name').val();


    if (error_first_name === false || error_email === false || error_last_name === false) {

        if (first_name === '') {

            $('.error-first_name').html('Ce champs est obligatoire').show();
        }
        if (last_name === '') {

            $('.error-last_name').html('Ce champs est obligatoire').show();
        }

        if (email === '') {
            $('.error-email').html('Ce champs est obligatoire').show();
        }

        return false;
    }else{


        $.ajax({
            url: 'Utils/sendChronic.php',
            type: 'POST',
            dataType: 'json',
            data:$(this).serialize(),
            async :true,
            cache: false,
            beforeSend: function () {
                //$('.process').html('En cours de traitement ....').show();
            },
            success: function (data) {

                if(data.errors){

                    alert(data.errors);

                }else if(data.success){

                    alert(data.success);
                    $('#first_name').add('#email, #last_name').val('');

                    //$('.alert-info').html(data.success).show();
                    //$('.alert-danger').hide();

                }

            }

        });
        return false;
    }
});

});