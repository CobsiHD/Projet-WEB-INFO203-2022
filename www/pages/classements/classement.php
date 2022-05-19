<?php
include("../../db/db_connect.php");
session_start();
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Classement</title>
  <link rel="stylesheet" href="../../css/styles_classement.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../css/style_page_info_jeux.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
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
        <section>
                <nav class="haut-tab">
                    <ul>
                        <button onclick="show(event)" id="general"><li>Géneral</li></button>
                        <button onclick="show(event)" id="blackjack"><li>Black Jack</li></button>
                        <button onclick="show(event)" id="bonneteau"><li>Bonneteau</li></button>
                        <button onclick="show(event)" id="chevaux"><li>Courses à Cheval</li></button>
                        <button onclick="show(event)" id="des"><li>Dés</li></button>
                        <button onclick="show(event)" id="machine_a_sous"><li>Machine à Sous</li></button>
                        <button onclick="show(event)" id="roulette"><li>Roulette</li></button>
                    </ul>
                </nav>
                <nav class="tab">
                    <table id="general">
                        <?php
                            include("../../lib/php/fct_classement.php");
                            include("../../lib/php/fct_tableau_classement.php");
                            $tab_class_general=classement("general",$conn);
                            tableau_classement($tab_class_general,"general");
                        ?>
                    </table>
                    <table id="blackjack">
                        <?php
                            $tab_class_general=classement("blackjack",$conn);
                            tableau_classement($tab_class_general,"blackjack");
                        ?>
                    </table>
                    <table id="bonneteau">
                        <?php
                            $tab_class_general=classement("bonneteau",$conn);
                            tableau_classement($tab_class_general,"bonneteau");
                        ?>
                    </table>
                    <table id="chevaux">
                        <?php
                            $tab_class_general=classement("chevaux",$conn);
                            tableau_classement($tab_class_general,"chevaux");
                        ?>
                    </table>
                    <table id="des">
                        <?php
                            $tab_class_general=classement("des",$conn);
                            tableau_classement($tab_class_general,"des");
                        ?>
                    </table>
                    <table id="machine_a_sous">
                        <?php
                            $tab_class_general=classement("machine_a_sous",$conn);
                            tableau_classement($tab_class_general,"machine_a_sous");
                        ?>
                    </table>
                    <table id="roulette">
                        <?php
                            $tab_class_general=classement("roulette",$conn);
                            tableau_classement($tab_class_general,"roulette");
                        ?>
                    </table>
                </nav>
            </section>
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


</body>

<script src="../../lib/js/classement.js"></script>
</html>
<?php 
include("../../db/db_disconnect.php");
?>