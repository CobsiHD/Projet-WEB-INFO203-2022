

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/style_page_info_jeux.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
<!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Info Jeux</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="../index.php" class="nav-link text-uppercase font-weight-bold">Accueil <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="../pages/index.php" class="nav-link text-uppercase font-weight-bold">Jouer</a></li>
                    <li class="nav-item"><a href="../pages/classements/classement.php" class="nav-link text-uppercase font-weight-bold">Classement</a></li>


                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class="container_text">
        <div class="text">
            <h1>Bonneteau</h1>
            <iframe width="480" height="360" src="https://www.youtube.com/embed/p7GHBG2aWxA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h1>BlackJack</h1>
            <iframe width="480" height="360" src="https://www.youtube.com/embed/ddu_fYRuv5I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h1>Jeux du dé</h1>
            <img src="../images/de-image-animee-0004.gif" alt="de">
        </div>
    </div>
</main>

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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
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




