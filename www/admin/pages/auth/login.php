<?php
include("../../../db/db_connect.php");
session_start() ;
include("../../lib/crud/authentification.crud.php");
if(isset($_POST["login"]) && isset($_POST["passwd"])){
	$log=$_POST["login"];
	// $log=md5($log); //enlever cette ligne
	$ret= select_auth($conn,$log);
	if( isset($ret["password"])){ //remplacer $ret["pwd"] par $ret["password"]
		$pwd=$ret["password"]; //remplacer $ret["pwd"] par $ret["password"]
	};

	if(md5($_POST["passwd"])==$pwd){
		/* session admin */
		$_SESSION["start"]=time() ; 
	
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
	<link rel="stylesheet" href="../../styles/styles_aux.css">
	</head>

	<body>
	<table class="menu">
	<form method="POST" action="login.php">
	<tr>
		<td>Login:	<input type="text" name="login"></td>
	</tr>
	<tr>
		<td>Password:	<input type="text" name="passwd"></td>
	</tr>
	<tr>
		<td><input type="submit" value="Connection"></td>
	<tr>
	</form>
	<tr>
		<td><a href="create_auth.php">Créer Un Compte</a></td>
	</tr>
	<tr>
		<td><a href="../../index.php">Retour à l'échequier</a>
	</table>
	</body>
<?php
include("../../../db/db_disconnect.php");
?>
</html>