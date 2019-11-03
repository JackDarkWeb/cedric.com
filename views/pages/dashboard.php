<? if(Session::check('name') == true):?>

<?$title_for_site = 'Mon espace'?>

    <div class="">
        <nav class="navbar navbar-expand nav1 navbar-dark">
            <div class="navbar-collapse">
                <div class="d-none d-md-inline-block">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="" class="nav-link"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        </li>

                        <li>
                            <a href="" class="nav-link">xxxxxxxxxx</a>
                        </li>
                        <li>
                            <a href="" class="nav-link">xxxxxxxxxxx</a>
                        </li>
                    </ul>
                </div>

                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" href="/about">À propos</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" href="/contact">Nous joindre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold rounded" style="background-color: #00ace6;" href="">Mon espace</a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link sing-out"><i class="fa fa-sign-out" style="font-size: 25px;" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!--<div class="nav2 sticky-top">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><h1>CEDRIC</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="coaching.php">Coaching</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="formations.php">Formations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="événements.php">Événements</a>
            </li>
            <li class="nav-item btn-group dropdown">
              <a class="nav-link" href="boutique.php">La boutique</a>
              <a class="nav-link dropdown-toggle dropdown-toggle-split" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Audios</a>
                <a class="dropdown-item" href="#">Vidéos</a>
                <a class="dropdown-item" href="#">Livres</a>
              </div>
            </li>
          </ul>

          <ul class="navbar-nav d-block d-md-none">
            <li class="nav-item active">
              <a class="nav-link" href="a-propos.php">À propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactez-nous.php">Nous joindre</a>
            </li>
          </ul>

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control" type="search" placeholder="Taper votre recherche" aria-label="Search">
          </form>
        </div>
      </nav>
    </div>-->

    <section class="mon-espac-section">
        <div class="container-fluid">
            <div class="row">
                <ul class="nav flex-column col-2 col-md-4 col-lg-3" style="background-color: #999; height: 100vh;">
                    <li class="nav-item">
                        <a class="nav-link py-4 active" href="#"><span><i class="fa fa-home fa-2x" aria-hidden="true"></i></span> <span class="d-none d-md-inline-block">Tableau de bord</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4" href="#"><span><i class="fa fa-user-o fa-2x" aria-hidden="true"></i></span> <span class="d-none d-md-inline-block">Mon profil</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4" href="#"><span><i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i></span> <span class="d-none d-md-inline-block">Mes commandes</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4" href="#"><span><i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i></span> <span class="d-none d-md-inline-block">Mes formations</span></a>
                    </li>
                </ul>


                <div class="col-10 col-md-8 col-lg-9 w-100">
                    <div class="row">
                        <?= $_SESSION['first_name'].' '.$_SESSION['last_name']?>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <script src="<?=assets('js.logout')?>"></script>
  <?=ExtendsView::extend('footer')?>



<?endif;?>
