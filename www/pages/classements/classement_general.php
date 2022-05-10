<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Classement</title>
  <link rel="stylesheet" href="./css/styles_accueil.css">
</head>





<section>
    <nav>
        <ul>
            <li>Black Jack</li>
            <li>Bonneteau</li>
            <li>Courses à Cheval</li>
            <li>Dés</li>
            <li>Machine à Sous</li>
            <li>Roulette</li>
        </ul>
        <nav>
            <table>
            <?php
                include("fct_classement.php");
                classement("general");
            ?>
        </nav>
    </nav>
