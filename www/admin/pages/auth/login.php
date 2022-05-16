<?php
include("../../../db/db_connect.php");
session_start() ;
if(isset($_POST["login"]) && isset($_POST["passwd"])){
    $log=$_POST["login"];
    $ret= select_auth($conn,$log);
    if( isset($ret["pwd"])){
		$pwd=$ret["pwd"];
	};
    if(md5($_POST["passwd"])==$pwd){
		/* session admin */
		$_SESSION["log"]=TRUE ; 
        $_SESSION["user"]=$log;
		/* redirection */
		header("Location:../../../index.php") ;
    }
	else {
		header("Location:login.php") ; 
	}
}
?>
<html>
<head>
	<meta charset="UTF-8">
    <title> Login </title>
	<link rel="stylesheet" href="../../../css/styles_auth.css">
</head>
<body>
    <section>
        <div class="box">
            <div class="container">
                <div class="form">
                <h2>Connectez-vous !</h2>
                <form method="POST" action="login_form.php">
                    <div class="inputBox">
                        <input type="text" name="login" placeholder="Identifiant">
                    </div>
                    <div class="inputBox">
                        <input type="password" name="passwd" placeholder="Mot de passe">
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Connexion">
                    </div>
                    <p class="sign">Vous n'avez pas de Compte ? <a href="create_account.php">Inscrivez-vous</a></p>
                </form>
                </div>
            </div>
        </div>
    </section>
    
</body>
<?php
include("../../../db/db_disconnect.php");
?>
</html>
