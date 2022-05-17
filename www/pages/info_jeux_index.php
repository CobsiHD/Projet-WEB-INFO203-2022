<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/style_page_info_jeux.css">
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
                    <li class="nav-item"><a href="../pages/index.php" class="nav-link ">Jouer</a></li>
                    <li class="nav-item"><a href="#" class="nav-link ">Classement</a></li>
                    <li class="nav-item"><a href="../pages/info_jeux_index.php" class="nav-link ">Info jeux</a></li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="../admin/pages/auth/login.php" class="nav-link rp-4">Se connecter</a></li>
                    <li class="nav-item"><a href="../admin/pages/auth/create_account.php" class="nav-link rp-4">s'inscrire</a></li>
                </ul>
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

        <div class="grid_bouton"><div class="bouton"><a href="../pages/index.php">Jouer</a></div></div>
    </div>
</div>

<footer>
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
</footer>

<!-- content -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></link>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>




</body>
</html>

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




