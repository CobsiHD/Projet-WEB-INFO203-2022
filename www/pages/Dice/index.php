<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/styles.css">
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
                    <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Accueil <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Jouer</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Classement</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="main">
    <div class="content_main">

        <section class="container_de">
            <div id="cube">
                <div class="front" id="1">
                    <span class="dot dot1"></span>
                </div>
                <div class="back" id="2">
                    <span class="dot dot1"></span>
                    <span class="dot dot2"></span>
                </div>

                <div class="right" id="3">
                    <span class="dot dot1"></span>
                    <span class="dot dot2"></span>
                    <span class="dot dot3"></span>
                </div>
                <div class="left" id="4">
                    <span class="dot dot1"></span>
                    <span class="dot dot2"></span>
                    <span class="dot dot3"></span>
                    <span class="dot dot4"></span>
                </div>
                <div class="top" id="5">
                    <span class="dot dot1" ></span>
                    <span class="dot dot2"></span>
                    <span class="dot dot3"></span>
                    <span class="dot dot4"></span>
                    <span class="dot dot5"></span>
                </div>

                <div class="bottom" id="6">
                    <span class="dot dot1"></span>
                    <span class="dot dot2"></span>
                    <span class="dot dot3"></span>
                    <span class="dot dot4"></span>
                    <span class="dot dot5"></span>
                    <span class="dot dot6"></span>
                </div>
            </div>

            <div class="fomulaire">
                <label for="nb">Entrez votre choix</label>
                <input type="number" id=nb name="nombre" required minlength="0" maxlength="4" size="10">

                <label for="mise">Entrez votre mise</label>
                <input type="number" id="mise" name="mise" required minlength="10" maxlength="4" size="10" step="10">



            </div>

            <script>
                var cube = document.getElementById('cube');

                var min = 1;
                var max = 6;

                cube.onclick = function() {
                    var nb = document.getElementById("nb").value;
                    var rand = getRandom(max, min);
                    var resultat = false;

                    if(rand === 6){
                        var yrand = 0;
                        var xrand = -1620;
                    } else if( rand === 5){
                        var yrand = 0;
                        var xrand = -1530;
                    }else if( rand === 4){
                        var yrand = 1530;
                        var xrand = 0;
                    }else if( rand === 3){
                        var yrand = -1530;
                        var xrand = 0;
                    }else if( rand === 2){
                        var yrand = 0;
                        var xrand = 1530;
                    }else if( rand === 1){
                        var yrand = 1440;
                        var xrand = 1440;
                    }

                    let yrot = 1800 +yrand;
                    let xrot = 1800 +xrand;

                    cube.style.transform = 'rotateX('+xrot+'deg) rotateY('+yrot+'deg)';

                    if(parseInt(nb) === rand){
                        resultat = true;
                    }
                    console.log(rand)
                    console.log(nb);
                    console.log(resultat);
                }


                function getRandom(max, min) {
                    return (Math.floor(Math.random() * (max-min)) + min);

                }

            </script>
        </section>
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
