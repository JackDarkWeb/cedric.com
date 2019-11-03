<?$title_for_site = 'A props de nous'?>

<?=ExtendsView::extend('nav')?>



    <section class="a-propos-section  pb-5" style="background-image: url(/public/images/rtyyw.jpg); padding-top: 180px;">
        <div class="container py-4" style="border: 10px solid #000; border-radius: 30px;">
            <div class="row">
                <h1 class="px-4 mx-auto mx-md-0">À propos</h1>
            </div>
            <div class="row px-2">
                <div class="col-md-6">
                    <div class="row">
                        <p class="px-4">Cédric Agossou est expert en leadership, coach professionnel, Entrepreneur et Motivateur. Auteur du concept RAM : Réussite Axée sur le Mental, Cédric est un exemple typique de ce que nous appelons un self- made. Ayant souffert durant son enfance de manque d'argent et élevé dans la précarité, il a très tôt pris sur lui la responsabilité de changer sa vie. Disciple de Napoléon Hill comme il aime s'appeler, Cédric considère que l'ignorance est l'unique cause de l'échec d'une vie.</p>
                        <p class="px-4">C'est pourquoi, il consacre une grande partie de son énergie à partager la connaissance et à redonner à tous ceux qui en ont le plus besoin.</p>
                        <p class="px-4">Engagé à changer des vies afin d'avoir un monde meilleur, Cedric Agossou dont le slogan est <b>Ensemble pour tutoyer le succès afin d'impacter positivement l'humanité</b> s'évertue à travers des séances coaching, les conférences et autres à réveiller le génie qui sommeille en chacun.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="mx-auto">
                            <img src="<?=assets('images.IMG-20181225-WA0028')?>" alt="image" class="img-fluid" style="width: 300px; height: 400px;">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




<?=ExtendsView::extend('footer')?>