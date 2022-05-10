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
                    <p class="sign">
                    <?php
                    include("../../lib/crud/authentification.crud.php");
                    include("../../lib/crud/classements.crud.php");
                    if (isset($_POST["login"]) && isset($_POST["passwd"]) && isset($_POST["conf_passwd"])){
                        $log = $_POST["login"];
                        $pwd = $_POST["passwd"];
                        $conf_pwd = $_POST["conf_passwd"];
                        $verif=select_auth($conn,$log);
                        if (isset($verif)){
                            echo("Le Compte est déjà existant !");
                        }elseif ($pwd == $conf_pwd && !(isset($verif))) {
                            $pwd=md5($pwd);
                            create_auth($conn,$log,$pwd);
                            create_class($conn,$log,100,0,0,0,0,0,0);
                            echo("Le Compte a été créer !");
                        };
                    };
                    ?>
                    </p>
                </div>
            </div>
        </div>           

    </body>
</html>
<?php 
include("../../../db/db_connect.php");
?>