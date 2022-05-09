<?php
include("../db/db_connect.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Info du Compte </title>
	    <link rel="stylesheet" href="../../../css/styles_auth.css">
    </head>
    <body>
    <div class="box">
            <div class="container">
                <div class="form">
                <h2> Information de votre Compte !</h2>
                <?php 
                include("../admin/lib/crud/classements.crud.php");
                $info=select_class($_SESSION["user"]);
                echo("Votre nom d'utilisateurs est".$info["user"]);
                echo("<br> Votre argent restant est :".$info["general"]);
                echo("<br>")

                ?>