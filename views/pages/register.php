<?$title_for_site = 'Sing Up'?>

<?=ExtendsView::extend('nav')?>

<div style="margin-top: 180px;">

    <div  class="px-5 col-sm-8 offset-sm-2 col-lg-4 offset-lg-4 my-5 bg-light py-4" style="border-top: 4px solid #00ace6; padding-top: 180px;">

        <?= isset($validator->errors['success'])? "<div class='alert alert-info'>Vous êtes enregistré!</div>": ''?>
        <?= isset($validator->errors['err'])? "<div class='alert alert-danger'>Cet e-mail est existe déjà</div>": ''?>
        <div class='alert alert-danger' id="danger" style="display: none"></div>
        <div class="process" style="display: none; color: gold"></div>


        <div class="row"><h4 class="text-center mx-auto text-uppercase">Créer un compte</h4></div>

        <form class="" action="" method="post" id="formSubmit">
            <div class="form-group row">
                <label for="first_name">Votre Prénom</label>
                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Entez votre prénom" value="<?= $validator->inputText('first_name')? $validator->inputText('first_name') : ''?>">
                <span class="error-first_name" style="color: red; font-style: italic"><?= isset($validator->errors['first_name'])? $validator->errors['first_name'] : ''?></span>
            </div>
            <div class="form-group row">
                <label for="last_name">Votre nom</label>
                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Entez votre nom"  value="<?= $validator->inputText('last_name')? $validator->inputText('last_name') : ''?>">
                <span class="error-last_name" style="color: red; font-style: italic"><?= isset($validator->errors['last_name'])? $validator->errors['last_name'] : ''?></span>
            </div>
            <div class="form-group row">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Entez votre email"  value="<?= $validator->inputText('email')? $validator->inputText('email') : ''?>">
                <span class="error-email" style="color: red; font-style: italic"><?= isset($validator->errors['email'])? $validator->errors['email'] : ''?></span>
            </div>
            <div class="form-group row">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Votre mot de passe">
                <span class="error-password" style="color: red; font-style: italic"><?= isset($validator->errors['password'])? $validator->errors['password'] : ''?></span>
            </div>

            <button type="submit" name="submit" class="btn btn-primary w-100">Créer</button>
        </form>

        <div class="row mt-4"><a href="singIn.php" class="btn btn-outline-primary w-100 text-uppercase">Se connecter</a></div>
    </div>
</div>

<script src="<?=assets('js.singup')?>"></script>

<?=ExtendsView::extend('footer')?>
