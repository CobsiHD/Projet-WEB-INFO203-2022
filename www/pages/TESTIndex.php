<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pages Jeux</title>
    <link href="../css/TESTPagesJeux.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
</head>
<body>

    <section>
        <div class="swiper mySwipper container">
            <div class="swipper-wrapper content">
                <div class="swiper-slide card">

                    <div class="card-content">
                        <div class="image">
                            <img href="../images/bonneteau.png">
                        </div>

                        <div class="name">
                            <span class="name">Nom du Jeux</span>
                        </div>

                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <div class="button">
                            <button class="play">Jouer</button>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide card">

                    <div class="card-content">
                        <div class="image">
                            <img href="../images/blackJack.png">
                        </div>

                        <div class="name">
                            <span class="name">Nom du Jeux</span>
                        </div>

                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <div class="button">
                            <button class="play">Jouer</button>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide card">

                    <div class="card-content">
                        <div class="image">
                            <img href="../images/roulette.png">
                        </div>

                        <div class="name">
                            <span class="name">Nom du Jeux</span>
                        </div>

                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <div class="button">
                            <button class="play">Jouer</button>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>


</body>

</html>