<?php

include("../../db/db_connect.php");

classement("general",$conn);
function classement($type,$conn){
    $sql="SELECT    * FROM `classements`";
    $ret=mysqli_query($conn, $sql);
    while ($row=mysqli_fetch_assoc($ret)){
        $ex= array("user" => $row["user"],
                    $type => $row[$type],);
        $origine[]=$ex;                        /* Pour prendre tte la base de donnée */
    }
    $type = array_column($origine,$type);
    array_multisort($type,SORT_DESC,$origine);
    return $origine ;
}
include("../../db/db_connect.php");
?>