<?php
include("../db/db_connect.php");
session_start() ;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Info du Compte </title>
	    <link rel="stylesheet" href="../css/styles_auth.css">
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    </head>
    <body>
    <section class = 'auth'>
    <div class="box">
            <div class="container">
                <div class="form">
                <h2> Information de votre Compte !</h2>
                <?php 
                include("../admin/lib/crud/classements.crud.php");
                $info=select_class($conn,$_SESSION["user"]);
                echo("<p class = 'sign'>Votre nom d'utilisateurs est <strong>".$info["user"]);
                echo("</strong><br> Votre argent restant est : <strong>".$info["general"]);
                echo("</strong><br> Argent gagné ou perdu aux jeux :");
                echo("<br> BlackJack : <strong>".$info["blackjack"]);
                echo("</strong><br> Bonnetaeau : <strong>".$info["bonneteau"]);
                echo("</strong><br> Courses à Cheval : <strong>".$info["chevaux"]);
                echo("</strong><br> Dés : <strong>".$info["des"]);
                echo("</strong><br> Machine à sous : <strong>".$info["machine_a_sous"]);
                echo("</strong><br> Roulette : <strong>".$info["roulette"]);
                echo('</strong>');
                ?>
                </div>
            </div>
    </div>
</section>
</body>
</html>
<?php
include("../db/db_disconnect.php");
?>