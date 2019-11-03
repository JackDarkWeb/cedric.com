<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?=isset($title_for_site)? $title_for_site : 'Cedric AGOSSOU - Coach professionnel, Entrepreneur et Motivateur'?></title>

    <!-- STYLES CSS -->
    <link rel="stylesheet" type="text/css" href="<?=assets('css.styles')?>">


    <!-- SCRIPTS JS -->

    <script type="text/javascript" src="<?=assets('js.scripts')?>"></script>

    <!-- Bootstrap CSS -->
    <?include 'pills/cssLink.php'?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <?include 'pills/jsLink.php'?>

</head>
<body>

    <?= isset($yield) ? $yield : ''; ?>

</body>
</html>