<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link href="css/styles.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>Accueil</title>
</head>

<body>
<header>
    <img src="images/png-clipart-dice-dice-2-removebg-preview.png" alt="dés">
    <h1>TEST SERVEUR + JEU DU Dé</h1>

</header>

<section class="container">
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

    <script>
        var cube = document.getElementById('cube');

        var min = 1;
        var max = 6;

        cube.onclick = function() {
            var rand = getRandom(max, min);

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

            console.log(max, min);
            console.log(rand)

            cube.style.transform = 'rotateX('+xrot+'deg) rotateY('+yrot+'deg)';
        }

        function getRandom(max, min) {
            return (Math.floor(Math.random() * (max-min)) + min);

        }

    </script>
</section>

<footer>

</footer>
</body>
</html>

