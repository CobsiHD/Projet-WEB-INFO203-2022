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
            <li>Géneral</li>
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
                $tab_class_general=classement("general",$conn);
                for($i=0 , $i< count($tab_class_general),$i++) {
                    echo("<tr><td>$i</td>");
                    $user_place=$tab_class_general[$i];
                    echo("<td>".$user_place["user"]."</td>");
                    echo("<td>");
                    echo($user_place["general"]);
                    echo("</td></tr>");
                };
            ?>
            </table>
        </nav>
    </nav>