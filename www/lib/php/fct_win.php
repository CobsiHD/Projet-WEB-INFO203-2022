<?php

include ("../../db/db_connect.php");

include("../../admin/lib/crud/classements.crud.php");


function win($mise,$jeux,$win,$user){
/*cette fonction change les points du classements quand quelq'un gagne ou perd
Entré $jeux en str pour dire quel jeux à gagné,$mise en int pour dire la somme qui a été parié, $win en booléen et enfin $user le joueur qui a gagné*/
global $conn ;
$info_joueur= select_class($conn,$user);
echo("coucou");

if ($win){
echo($info_joueur[$jeux]);

$monnaie_jeux = $info_joueur[$jeux] + $mise ; //rajoute la mise au jeux en question du joueur
$info_joueur[$jeux] = $monnaie_jeux ;
echo($info_joueur[$jeux]);

$monnaie_general=$info_joueur['general'] + $mise ; // rajoute la mise au géneral

update_class($conn, $user,$monnaie_general,$info_joueur['des'],$info_joueur['bonneteau'],$info_joueur['roulette'],$info_joueur['blackjack'],$info_joueur['machine_a_sous'],$info_joueur['chevaux']); //modifie les donnée de la basse de donnée

}else {

    $monnaie_jeux = $info_joueur[$jeux] - $mise ;
    $info_joueur[$jeux] = $monnaie_jeux ;

    $monnaie_general=$info_joueur['general'] - $mise ;

    update_class($conn, $user,$monnaie_general,$info_joueur['des'],$info_joueur['bonneteau'],$info_joueur['roulette'],$info_joueur['blackjack'],$info_joueur['machine_a_sous'],$info_joueur['chevaux']);
};
};

win(200,"blackjack",TRUE,"Evan");

include("../../db/db_disconnect.php");
?>