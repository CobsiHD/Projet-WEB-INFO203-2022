<?php
include("../../../db/db_connect.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Create account </title>
	    <link rel="stylesheet" href="../../css/styles_auth.css">
    </head>
    <body>
        <form method="post">
            Login                 : <input type="text" name="login">
            Password              : <input type="password" name="passwd">
            Confirmation Password : <input type="password" name="conf_passwd">
            <input type="submit" value="Création de Compte">
        </form>
        <?php
        include("../../lib/crud/authentification.crud.php");
        if (isset($_POST["login"]) && isset($_POST["passwd"]) && isset($_POST["conf_passwd"])){
            $log = $_POST["login"];
            $pwd = $_POST["passwd"];
            $conf_pwd = $_POST["conf_passwd"];
            if ($pwd == $conf_pwd) {
                $pwd=md5($pwd);
                create_auth($conn,$log,$pwd);
                echo("Le compte a bien été créer !");
            };
        };
        ?>
    </body>
</html>
<?php 
include("../../../db/db_connect.php");
?>
