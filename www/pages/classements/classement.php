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
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

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
</body>

<script src="../../lib/js/classement.js"></script>
</html>
<?php 
include("../../db/db_disconnect.php");
?>