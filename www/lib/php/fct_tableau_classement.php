<?php
function tableau_classement($tab_class_general,$type){
    echo("<thead><tr><td>Rang</td><td>Joueur</td><td>Argent Gagné</td></tr></thead><tbody>");
    for($i=0 ; $i< count($tab_class_general) ; $i++){
        $user_place=$tab_class_general[$i];
        $place= $i + 1;
        if(isset($_SESSION["user"])){
            if($user_place["user"]==$_SESSION["user"]){
                echo("<tr><td class='user'>$place</td>");
                echo("<td class='user'>".$user_place["user"]."</td>");
                echo("<td class='user'>");
                echo($user_place[$type]);
                echo("</td></tr>");
            }else {
                echo("<tr><td>$place</td>");
                echo("<td>".$user_place["user"]."</td>");
                echo("<td>");
                echo($user_place[$type]);
                echo("</td></tr>");
                };
        }else {
            echo("<tr><td>$place</td>");
            echo("<td>".$user_place["user"]."</td>");
            echo("<td>");
            echo($user_place[$type]);
            echo("</td></tr>");
            };
    };
    echo("</tbody>");
}