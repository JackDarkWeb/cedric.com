<? $title_for_site = 'coaching'?>

<?=ExtendsView::extend('nav', ['title_for_page' => 'Coaching'])?>


<section class="coaching-section">
    <div class="img-bgd text-center text-uppercase">
        <h1><?= isset($title_for_page)? $title_for_page : 'Coaching'?></h1>
    </div>

    <div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="mx-auto">
                            <img src="<?=assets('images.IMG-20181225-WA0029')?>" alt="image" class="img-fluid ">
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="row mb-5">
                        <h1 class="mx-auto text-center font-weight-bold">Un Coach Pro pour vous accompagner.</h1>
                    </div>
                    <div class="row">
                        <h4 class="mx-auto text-center px-2 px-md-4">Un Coach pour vous orienter vers la réussite! Apprenez comment définir vos priorités, créer un plan d’action et augmenter vos résultats. Une opportunité unique de développer votre vie, vos relations, vos affaires, votre réseau, votre performance et votre équilibre. Nous proposons différentes formules de Coaching. Elles s’adressent à tous, particuliers, entrepreneurs, grandes entreprises, propriétaires, et sont adaptées à vos besoins.</h4>
                    </div>
                </div>
            </div>
        </div>
</section>

<?=ExtendsView::extend('footer')?>
