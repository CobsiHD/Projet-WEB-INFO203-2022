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
    <div class="box">
            <div class="container">
                <div class="form">
                <h2> Information de votre Compte !</h2>
                <?php 
                include("../admin/lib/crud/classements.crud.php");
                $info=select_class($conn,$_SESSION["user"]);
                echo("Votre nom d'utilisateurs est".$info["user"]);
                echo("<br> Votre argent restant est :".$info["general"]);
                echo("<br> Argent gagné ou perdu aux jeux :");
                echo("<br> BlackJack :".$info["blackjack"]);
                echo("<br> Bonnetaeau :".$info["bonneteau"]);
                echo("<br> Courses à Cheval :".info["chevaux"]);
                echo("<br> Dés :".info["des"]);
                echo("<br> Machine à sous :".info["machine_a_sous"]);
                echo("<br> Roulette :".info["Roulette"]);
                ?>
                </div>
            </div>
    </div>
</body>
</html>
<?php
include("../db/db_disconnect.php");
?>