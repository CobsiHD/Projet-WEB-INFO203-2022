<?php
session_start();
$_SESSION["user"]="";
$_SESSION["log"]=FALSE;
header("Location:../../index.php");
?>