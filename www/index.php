<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="./css/styles_accueil.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
<!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3"> <!-- / / espacement bottom-top -->
        <div class="container"><a href="#" class="navbar-brand ">Casino</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link ">Accueil <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="pages/index.php" class="nav-link ">Jouer</a></li>
                    <li class="nav-item"><a href="pages/classements/classement.php" class="nav-link ">Classement</a></li>
                    <li class="nav-item"><a href="pages/info_jeux_index.php" class="nav-link ">Info jeux</a></li>
                </ul>

                <?php include("./lib/php/write_log.php")?>

            </div>
        </div>
    </nav>
</header>


<!-- Contenu-->
<div class="container_main">
    <div class="content_main">
        <div class="titre">
            <h1 class="online "><span>Online</span></h1>
            <h1 class="casino ">Casino</h1>
        </div>
        <div class="grid_bouton">
            <div class="bouton">
                <a href="pages/index.php">Jouer</a>
            </div>
        </div>
    </div>
</div>

<main>
    <div class="container_text">
        <div class="text">
            <h1>Fonctionnement</h1>
                <h2>Création de compte / Connexion</h2>
                    <p>Afin de pouvoir jouer aux différents jeux de notre plateforme, il vous sera nécessaire de posséder un compte sur celle-ci. Pour ce faire, vous avez accès à une interface de création de compte, juste en cliquant en haut à gauche sur le bouton "<strong>s'inscrire</strong>". Une fois cette étape réalisée, il suffira de vous connecter en cliquant sur le bouton "<strong>se connecter</strong>". Dès lors, vous devriez voir apparaitre votre nombre de coins. </p>
                <h2>Jouer aux jeux</h2>
                    <p>Sur ce casino en ligne vous avez accès à 6 jeux, à retrouver sur <a href="pages/index.php">cette page</a>. Pour comprendre les règles et savoir comment jouer, je vous invite à consulter la <a href="pages/info_jeux_index.php">page dédier aux règles.</a> Pour jouer à un jeu, rien de plus simple, vous vous rendez sur la page de votre jeu après avoir lu les règles, et vous pouvez y jouer sur votre navigateur internet.</p>
                <h2>Classement</h2>
                    <p>Nous avons mis en place un système de classement, que vous pouvez consulter sur <a href="">cette page</a>. Pour monter dans le classement, il suffi de gagner des coins en jouant aux jeux. Plus vous jouez; plus vous avez de chance de gagner, mais plus vous avez de chance de perdre, Bonne chance à tous !</p>
            <h1>Nouveauté</h1>
                <h2>Jeux</h2>
                    <h3>17/05/22</h3>
            <p> A ce jour nous avons mis a disposition 6 jeux parmis lesquel on retrouve : <ul><li>Bonneteau</li><li>Lancer de Dés</li><li>Blacjack</li><li>Roulette</li><li>PMU</li><li>Machine à sous</li></ul> En espérant que ces jeux vous plaisent.</p>
        </div>
    </div>
</main>

    <div class="footer">
        <footer>
            <div class="social">
                <a href="#"><i class="icon icon-social-instagram"></i>
                </a><a href="#"><i class="icon icon-social-snapchat"></i>
                </a><a href="#"><i class="icon icon-social-twitter"></i></a>
                <a href="#"><i class="icon icon-social-facebook"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Accueil</a></li>
                <li class="list-inline-item"><a href="#">Jeux</a></li>
                <li class="list-inline-item"><a href="#">A propos</a></li>
                <li class="list-inline-item"><a href="#">Contact</a></li>
            </ul>
            <p class="copyright">TeamZboub © 2022</p>
        </footer>
    </div>

<!-- content -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<script>
    /* Script Pour scroll header */
    $(function () {
        $(window).on('scroll', function () {
            if ( $(window).scrollTop() > 10 ) {
                $('.navbar').addClass('active');
            } else {
                $('.navbar').removeClass('active');
            }
        });
    });

</script>



</body>
</html>






