<!DOCTYPE html>
<html>
<head>
    <title>Pages Jeux</title>
    <link href="../css/style_pages_jeux.css" rel="stylesheet">
</head>
<body>
<div class="slide-container">
    <div class="custom-slider fade">
        <div class="slide-index">1 / 6</div>
        <img class="slide-img" src="../images/blackJack.png">
        <div class="slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
    </div>
    <div class="custom-slider fade">
        <div class="slide-index">2 / 6</div>
        <img class="slide-img" src="../images/bonneteau.png">
        <div class="slide-text">Nullam luctus aliquam ornare. </div>
    </div>
    <div class="custom-slider fade">
        <div class="slide-index">3 / 6</div>
        <img class="slide-img" src="../images/imgdes.png">
        <div class="slide-text">Praesent lobortis libero sed egestas suscipit.</div>
    </div>
    <div class="custom-slider fade">
        <div class="slide-index">4 / 6</div>
        <img class="slide-img" src="../images/PMU.png">
        <div class="slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
    </div>
    <div class="custom-slider fade">
        <div class="slide-index">5 / 6</div>
        <img class="slide-img" src="../images/roulette.png">
        <div class="slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
    </div>
    <div class="custom-slider fade">
        <div class="slide-index">6 / 6</div>
        <img class="slide-img" src="../images/jackpot.png">
        <div class="slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
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
</body>

<script src="../lib/js/script_pages_jeux.js"></script>

</html>