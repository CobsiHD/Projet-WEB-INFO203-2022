<?php

include("../../db/db_connect.php");

/*classement("general",$conn);*/
function classement($type,$conn){
    $sql="SELECT * FROM `classements`";
    $ret=mysqli_query($conn, $sql);
    while ($row=mysqli_fetch_assoc($ret)){
        $origine[]=$row;
    }
    $temp=$origine;
    $class=[];
    while (count($class)!=count($origine) || count($class)<=2){
        if (count($temp)!=0){
            $limit = count($temp) -1;
        }
        elseif (count($temp)==0){
            $limit = 0 ;
        }
        for($i = 0 ; $limit; $i++){
            if($temp[$i][$type] <= $temp[$i + 1][$type] ){
                echo("coucou");
                $indice=$i;
            };
            echo($i);
        };
        echo(count($class));
        print_r($class);
        $class[]=$temp[$indice];
        $temp = array_slice($temp,0,($indice-1)).array_slice($temp,($indice+1),count($temp));
    };
    return $class ;
}
include("../../db/db_connect.php");
?>