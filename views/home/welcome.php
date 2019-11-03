<? $title_for_site = 'Cedric AGOSSOU - Coach professionnel, Entrepreneur et Motivateur'?>

<?=ExtendsView::extend('nav')?>


<section class="home-section">
    <video src="<?=assets('images.SearchLeeds 2018 Official Event Video')?>" autoplay muted loop class="w-100 d-none d-md-block"></video>

    <div class="content-hero">
        <div class="container">
            <div class="row">
                <h1 class="mx-auto text-center wow fadeInDown">Transformez votre vie par la puissance de votre pensée!</h1>
            </div>
            <div class="row mt-5">
                <!--<div class="btn btn-outline-primary col-sm-4 offset-sm-4 col-10 offset-1">Démarer maintenant</div>-->
            </div>
        </div>
    </div>
</section>

<section class="section-about">
    <div class="col-12">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <img src="<?=assets('images.IMG-20181212-WA0094')?>" class="img-fluid w-100"/>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row mt-5">
                    <h1 class="mx-auto text-center font-weight-bold">À propos de Cedric</h1>
                </div>
                <div class="row text-center">
                    <p class="px-4">Cédric Agossou est expert en leadership, coach professionnel, Entrepreneur et Motivateur. Auteur du concept RAM : Réussite Axée sur le Mental, Cédric est un exemple typique de ce que nous appelons un self- made. Ayant souffert durant son enfance de manque d'argent et élevé dans la précarité, il a très tôt pris sur lui la responsabilité de changer sa vie. Disciple de Napoléon Hill comme il aime s'appeler, Cédric considère que l'ignorance est l'unique cause de l'échec d'une vie.</p>
                    <p class="px-4">C'est pourquoi, il consacre une grande partie de son énergie à partager la connaissance et à redonner à tous ceux qui en ont le plus besoin.</p>
                    <p class="px-4">Engagé à changer des vies afin d'avoir un monde meilleur, Cedric Agossou dont le slogan est <b>Ensemble pour tutoyer le succès afin d'impacter positivement l'humanité</b> s'évertue à travers des séances coaching, les conférences et autres à réveiller le génie qui sommeille en chacun.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section  class="vide-heros">
  <div>
    <video src="images/FallyIpupa.mp4" autoplay muted loop controls class="w-100"></video>
  </div>
</section>-->

<section class="section-newsletters bg-primary py-5">
    <div class="col-lg-8 offset-lg-2">
        <div class="row mb-4">
            <h2 class="mx-auto text-center text-white font-weight-bold">Recevez la chronique gratuit de Cedric</h2>
        </div>
        <div class="">

            <form class="row" method="post" action="" id="formChronic">
                <div class="form-group col-sm-4 col-10 offset-1 offset-sm-0">
                    <input type="text" name="first_name" id="first_name" placeholder="Votre prenom..." class="form-control">
                    <span class="error-first_name" style="color: red; font-style: italic; display: none"></span>
                </div>
                <div class="form-group col-sm-4 col-10 offset-1 offset-sm-0">
                    <input type="text" name="last_name" id="last_name" placeholder="Votre nom..." class="form-control">
                    <span class="error-last_name" style="color: red; font-style: italic; display: none"></span>
                </div>
                <div class="form-group col-sm-4 col-10 offset-1 offset-sm-0">
                    <input type="email" name="email" id="email" placeholder="Votre email..." class="form-control">
                    <span class="error-email" style="color: red; font-style: italic; display: none"></span>
                </div>

                <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-10 offset-1">
                    <input type="submit" value="Je reçois" id="sendNewsletters" class="btn btn-info w-100">
                </div>
            </form>
        </div>
    </div>
</section>



<section class="col-12 section-overlay">
    <div class="row">
        <div class="col-md-4 box1">
            <div class="row" style="background-color: rgba(0,0,0,0.7); height: 300px;">
                <div class="col-12">
                    <div class="row">
                        <h2 class="mx-auto text-center wow fadeInDown">Formations</h2>
                    </div>

                    <div class="row">
                        <a href="/formation" class="btn btn-outline-light mx-auto wow fadeInUp">EN SAVOIR PLUS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 box2">
            <div class="row" style="background-color: rgba(0,0,0,0.7); height: 300px;">
                <div class="col-12">
                    <div class="row">
                        <h2 class="mx-auto text-center wow fadeInDown">Coaching</h2>
                    </div>

                    <div class="row">
                        <a href="/coaching" class="btn btn-outline-light mx-auto wow fadeInUp">EN SAVOIR PLUS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 box3">
            <div class="row" style="background-color: rgba(0,0,0,0.7); height: 300px;">
                <div class="col-12">
                    <div class="row">
                        <h2 class="mx-auto text-center wow fadeInDown">Événements</h2>
                    </div>

                    <div class="row">
                        <a href="/event" class="btn btn-outline-light mx-auto wow fadeInUp">EN SAVOIR PLUS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="testimony-section">
  <div class="container">
    <div class="row">
      <h1 class="mx-auto text-center mt-5 mb-4 wow fadeInLeft">Témoignages</h1>
    </div>
    <div class="row pb-5">
      <div id="carouseltesty" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner content">
          <div class="carousel-item active">
            <h5 class="mx-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
          </div>
          <div class="carousel-item">
            <h5 class="mx-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            </h5>
          </div>
          <div class="carousel-item">
            <h5 class="mx-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouseltesty" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouseltesty" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>-->

<!--<section class="bg-light py-5">
  <div class="container">
    <div class="row">
      <h1 class="mx-auto text-center mb-4 font-weight-bold">Les derniers articles parus</h1>
    </div>

    <div class="">
      <div class="card-deck row">
        <div class="card">
          <img src="images/9RdVGN.jpg" class="w-100 img-fluid img-fixed-top">

          <div class="card-body">
            <small class="text-muted">Carrière et affaires</small>
            <h4>Travailler chez soi: comment rester motivé ?</h4>
          </div>

          <div class="card-footer text-right">
            <a href="#" class="btn btn-outline-primary">LIRE L'ARTICLE</a>
          </div>
        </div>

        <div class="card">
          <img src="images/9RdVGN.jpg" class="w-100 img-fluid img-fixed-top">

          <div class="card-body">
            <small class="text-muted">Carrière et affaires</small>
            <h4>Travailler chez soi: comment rester motivé ?</h4>
          </div>

          <div class="card-footer text-right">
            <a href="#" class="btn btn-outline-primary">LIRE L'ARTICLE</a>
          </div>
        </div>

        <div class="card">
          <img src="images/9RdVGN.jpg" class="w-100 img-fluid img-fixed-top">

          <div class="card-body">
            <small class="text-muted">Carrière et affaires</small>
            <h4>4 astuces pour établir un budget solide pour les fêtes de fin d'année</h4>
          </div>

          <div class="card-footer text-right">
            <a href="#" class="btn btn-outline-primary">LIRE L'ARTICLE</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->


<script src="<?=assets('js.index')?>"></script>
<script src="<?=assets('js.search')?>"></script>


<?=ExtendsView::extend('footer')?>
