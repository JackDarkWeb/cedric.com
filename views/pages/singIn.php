<?$title_for_site = 'Sing In'?>

<?=ExtendsView::extend('nav')?>



<div style="margin-top: 180px;">
    <div  class="px-5 col-sm-8 offset-sm-2 col-lg-4 offset-lg-4 my-5 bg-light py-4" style="border-top: 4px solid #00ace6;">

        <div class="row"><h4 class="text-center mx-auto">CONNEXION</h4></div>


        <span class="process" style="display: none; color: gold"></span>
        <div class="result"></div>
        <?= ($this->message_flash('message')) ? $this->message_flash('message') : ''?>

        <form class="" action="" method="post" id="formSingin">
            <div class="form-group row">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Entez votre email" value="<?=isset($email) ? $email : $this->post('email')?>">
                <span class="error-email" style="display:; color:red; font-style: italic"><?= $this->error("email")?></span>
            </div>
            <div class="form-group row">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Votre mot de passe" value="<?=(isset($password) ? $password : '')?>">
                <span class="error-pass" style="display:; color:red; font-style: italic"><?= $this->error("password")?></span>
            </div>
            <div class="form-group form-check row">
                <input type="checkbox" name="remember" value="1" class="form-check-input" id="check" <?=(isset($remember)? "checked='checked'": '')?>>
                <label class="form-check-label" for="check">Se souvenir de moi</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Identification</button>
        </form>

        <div class="row my-3"><a href="/user/forget_password" class="text-center  text-muted mx-auto">Identifiant ou mot de passe oublié ? </a></div>

        <div class="row"><a href="/user/register" class="btn btn-outline-primary w-100 text-uppercase">Créer un compte gratuit</a></div>
    </div>
</div>


<script src="<?=assets('js.singin')?>"></script>

<?=ExtendsView::extend('footer')?>