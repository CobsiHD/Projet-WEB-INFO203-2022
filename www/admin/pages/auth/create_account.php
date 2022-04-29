<?php
include("../../../db/db_connect.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Create account </title>
	    <link rel="stylesheet" href="../../../css/styles_auth.css">
    </head>
    <body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="container">
                <div class="form">    
                    <form method="post">
                    <h2> Inscrivez-vous !</h2>
                    <div class="inputBox">
                        <input type="text" name="login" placeholder="Identifiant">
                    </div>
                    <div class="inputBox">
                        <input type="password" name="passwd" placeholder="Mot de Passe">
                    </div>
                    <div class="inputBox">
                        <input type="password" name="conf_passwd" placeholder="Confirmation Mot de Passe">
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Créer le Compte">
                    </div>
                    <p class="sign"><a href="login.php">Connectez-Vous</a></p>               
                    </form>
                </div>
            </div>
        </div>           
        <?php
        include("../../lib/crud/authentification.crud.php");
        if (isset($_POST["login"]) && isset($_POST["passwd"]) && isset($_POST["conf_passwd"])){
            $log = $_POST["login"];
            $pwd = $_POST["passwd"];
            $conf_pwd = $_POST["conf_passwd"];
            if ($pwd == $conf_pwd) {
                $pwd=md5($pwd);
                create_auth($conn,$log,$pwd);
            };
        };
        ?>
    </body>
</html>
<?php 
include("../../../db/db_connect.php");
?>