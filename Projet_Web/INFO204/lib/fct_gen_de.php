<?php


function gen_chiffre(){
    $chiffre = $_POST["chiffre"];

    if(random_int(1,6) == $chiffre){
        echo "c'est le meme";
    }
}
gen_chiffre();
?>




