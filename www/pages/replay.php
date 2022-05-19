<?php

include("../db/db_connect.php");

?>
<html>
<head>
	<meta charset="UTF-8">
    <title> Replay </title>
</head>
<body>
<?php
include("../lib/php/fct_win.php");
if (isset($_GET)){
    if (isset($_GET["win"])){
        $win = $_GET["win"];
        // win($_SESSION["mise"] , $_SESSION["jeux"], $win , $_SESSION["user"]);
        $_SESSION["mise"]=0 ; 
    }
}
if($win){
    echo("Tu as Gagné !");
}
else {
    echo("Tu as Perdu !");
}



?>
</body>
</html>
<?php
include("../db/db_disconnect.php");

?>