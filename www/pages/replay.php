<?php

include("../db/db_connect.php");
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
    <title> Replay </title>
    <link rel="stylesheet" href="../../css/replay.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
<?php
include("../lib/php/fct_win.php");
include("../admin/lib/crud/classements.crud.php");

if (isset($_GET)){
    if (isset($_GET["win"])){
        $win = $_GET["win"];
        // win($_SESSION["mise"] , $_SESSION["jeux"], $win , $_SESSION["user"]);
        $_SESSION["mise"]=0 ; 
    }
}
if($win=="true"){
    echo("Tu as Gagné !");
}
elseif($win=="false") {
    echo("Tu as Perdu !");
}

echo("<a href=");
echo($_SESSION["pages"]);
echo(">")

?>
<svg>
    <rect></rect>
</svg>Rejouer
<?php
echo("</a>");
?>
</body>
</html>
<?php
include("../db/db_disconnect.php");

?>