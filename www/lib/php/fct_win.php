<?php
function win($mise,$jeux,$win,$user){
/*cette fonction change les points du classements quand quelq'un gagne ou perd
Entré $jeux en str pour dire quel jeux à gagné,$mise en int pour dire la somme qui a été parié, $win en booléen et enfin $user le joueur qui a gagné*/
$info_joueur=select_class($conn,$user);
if ($win){
$info_joueur[$jeux] = $info_joueur[$jeux] + $mise ;
$info_joueur['general']=$info_joueur['general'] + $mise ;
update($conn, $user,$info_joueur['general'],$info_joueur['des'],$info_joueur['bonneteau'],$info_joueur['roulette'],$info_joueur['blackjack'],$info_joueur['machine_a_sous'],$info_joueur['chevaux'])
};
else {
    $info_joueur[$jeux] = $info_joueur[$jeux] - $mise ;
    $info_joueur['general']=$info_joueur['general'] - $mise ;
    update($conn, $user,$info_joueur['general'],$info_joueur['des'],$info_joueur['bonneteau'],$info_joueur['roulette'],$info_joueur['blackjack'],$info_joueur['machine_a_sous'],$info_joueur['chevaux'])
};
};





?>