<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Pages Jeux</title>
    <link href="../css/style_pages_jeux.css" rel="stylesheet">
    <link href="../css/styles_accueil.css" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>

<body>
<header>
    <h1>Bienvenue au CASINO !</h1>
    <nav>
        <a href="../index.php">Accueil</a>
        <a href="">Info Jeux</a>
        <a href="classements/classement.php">Classement</a>
        <a href="../admin/pages/auth/login.php">Connexion</a>
    </nav>
</header>
<div class="main">
<section id="steezy">
<div class="slide-container">

    <div class="custom-slider fade">
        <div class="slide-index">1 / 6</div>
            <a href="BlackJack/blackjack.php">
                <img class="slide-img" src="../images/blackJack.png" alt="Le BlackJack" >
            </a>
        <div class="slide-text">BlackJack</div>
    </div>
    <div class="custom-slider fade">
        <div class="slide-index">2 / 6</div>
            <a href="Bonneteau/index.html">
                <img class="slide-img" src="../images/bonneteau.png" alt="Le jeux du Bonneteau">
            </a>
        <div class="slide-text">Bonneteau</div>
    </div>
    <div class="custom-slider fade">
        <div class="slide-index">3 / 6</div>
            <a href="Dice/index.php">
                <img class="slide-img" src="../images/imgdes.png" alt="Le jeu du dé">
            </a>
        <div class="slide-text">Le jeu du dé</div>
    </div>
    <div class="custom-slider fade">
        <div class="slide-index">4 / 6</div>
            <a href="Horse/index.php">
                <img class="slide-img" src="../images/PMU.png" alt="Le PMU">
            </a>
        <div class="slide-text">La Course Hippique</div>
    </div>
    <div class="custom-slider fade">
        <div class="slide-index">5 / 6</div>
        <img class="slide-img" src="../images/roulette.png" alt="La roulette">
        <div class="slide-text">La Roulette</div>
    </div>
    <div class="custom-slider fade">
        <div class="slide-index">6 / 6</div>
        <img class="slide-img" src="../images/jackpot.png" alt="Machine à sous">
        <div class="slide-text">La Machine Sous</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<br>
<div class="slide-dot">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
</div>

</section>
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

</body>
<!-- content -->
<script src="../lib/js/jquery.js"></script>
<script src="../lib/js/bootstrap.js"></script>

<script src="../lib/js/script_pages_jeux.js"></script>

<script>
    /* Script Pour scroll header */
    $(function() {
        $(window).scroll(function () {
            var winTop = $(window).scrollTop();
            if (winTop >= 30) {
                $("body").addClass("sticky-header");
            } else {
                $("body").removeClass("sticky-header");
            }
        });
    });
</script>
</html>