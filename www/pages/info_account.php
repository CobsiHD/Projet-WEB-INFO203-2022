<?php
include("../db/db_connect.php");
session_start() ;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Info du Compte </title>
	    <link rel="stylesheet" href="../../../css/styles_auth.css">
    </head>
    <body>
    <div class="box">
            <div class="container">
                <div class="form">
                <h2> Information de votre Compte !</h2>
                <?php 
                include("../admin/lib/crud/classements.crud.php");
                $info=select_class($_SESSION["user"]);
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
                <form method="post" action="info_account.php">
                    <div class="inputBox">
                        <input type="password" name="passwd" placeholder="Mot de passe">
                    </div>
                    <div class="inputBox">
                        <input type="password" name="conf_passwd" placeholder="Confirmation de Mot de passe">
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Changer de Mot De passe">
                    </div>
                </form>
                <?php
                if(isset($_POST["passwd"]) && isset($_POST["conf_passwd"])){
                    $pwd = $_POST["passwd"];
                    $conf_pwd = $_POST["conf_passwd"];
                    $verif=select_auth($conn,$_SESSION["user"]);
                    if(isset($verif)){
                        if ($pwd == $conf_pwd) {
                            $pwd=md5($pwd);
                            $log= $_SESSION["user"];
                            update_auth($conn,$log,$pwd);
                        }
                    }
                }
                ?>
                </div>
            </div>
    </div>
</body>
</html>
<?php
include("../db/db_disconnect.php");
?>