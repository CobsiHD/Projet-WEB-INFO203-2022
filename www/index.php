<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="./css/styles_accueil.css">

</head>
<body>

<header>
    <nav>
        <a href="">Jouer</a>
        <a href="">Info Jeux</a>
        <a href="">Classement</a>
        <a href="admin/pages/auth/login.php">Connexion</a>
    </nav>
</header>
<div class="main">
    <section id='steezy'>
        <h2> Lorem ipsum dolor sit amet</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex libero cupiditate deserunt earum, fuga, ab labore esse animi, nihil est tenetur non delectus perferendis. Maxime accusamus ea rem sint at!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ut aspernatur omnis neque iusto. Veritatis rem ad atque optio perferendis. Dolorum qui consequatur, repellat soluta impedit porro totam molestiae sit.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus iusto, omnis quas, rem minus cupiditate, sunt voluptates minima sint nemo ipsa itaque consequatur dolor, quam necessitatibus vitae. Quod, eaque, quam.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum!</p>
    </section>

    <section id='real'>
        <h2> Lorem ipsum dolor sit amet</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum!</p>

    </section>

    <section id='big'>
        <h2>Lorem ipsum dolor sit amet</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum!</p>

    </section>
</div>


    <main class="main">
        <div class="slide">
            <a bonjour></a>
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
<script src="lib/js/jquery.js"></script>
<script src="lib/js/bootstrap.js"></script>

</body>
</html>

<script>
    /* Script Pour scroll header */
    $(function() {
        $(window).scroll(function () {
            var winTop = $(window).scrollTop();
            if (winTop >= 40) {
                $("body").addClass("sticky-header");
            } else {
                $("body").removeClass("sticky-header");
            }
        });
    });
</script>