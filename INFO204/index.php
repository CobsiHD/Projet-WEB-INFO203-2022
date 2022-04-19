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
        <div class="top">
            <span class="dot dot1" id="5"></span>
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
        var max = 30;

        cube.onclick = function() {
            var xRand = getRandom(max, min);
            var yRand = getRandom(max, min);

            console.log(max, min);
            console.log(xRand, yRand)

            cube.style.transform = 'rotateX('+xRand+'deg) rotateY('+yRand+'deg)';
        }

        function getRandom(max, min) {
            return (Math.floor(Math.random() * (max-min)) + min) * 90;

        }

    </script>

</section>

<footer>

</footer>
</body>
</html>

