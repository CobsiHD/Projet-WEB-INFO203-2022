<?php
include("../../db/db_connect.php");
session_start() ;
if(isset($_POST["login"]) && isset($_POST["passwd"])){
    $log=$_POST["login"];
    $ret= select_auth($conn,$log);
    if( isset($ret["pwd"])){
		$pwd=$ret["pwd"];
	};
    if(md5($_POST["passwd"])==$pwd){
		/* session admin */
		$_SESSION["start"]=time() ; 
	
		/* redirection */
		header("Location:../../index.php") ;
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
	<link rel="stylesheet" href="../../css/styles_auth.css">
</head>
<body>
    <form method="POST" action="login_form.php">
    Login    :	<input type="text" name="login">
    Password :  <input type="text" name="passwd">
        <input type="submit" value="Connection">
    </form>
    <a href="create_account.php">Créer Un Compte</a>
</body>
<?php
include("../../db/db_disconnect.php");
?>
</html>
