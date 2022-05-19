<?php
session_start();
if (!isset($_SESSION["log"])){
 	header("Location:../../admin/pages/auth/login.php") ; 
} elseif (!($_SESSION["log"])){
	header("Location:../../admin/pages/auth/login.php") ;
} else {
 	$_SESSION["pages"]="http://os-vps418.infomaniak.ch:1180/l1_info_5/www/pages//BlackJack/blackjack.php";
	$_SESSION["jeux"]="blackjack";
}
?>


<html>
<head>
	<meta charset="UTF-8">
    <title> BlackJack </title>
	<link rel="stylesheet" href="../../css/styles_blackjack.css">
	<link rel="stylesheet" href="../../css/styles_auth.css">
	<script src = "../../lib/js/script_blackjack.js"></script>
</head>
<body>
<header>
</header>

	<?php 
	if (isset($_POST["mise"])){
		if ($_POST["mise"]!=""){
			echo( "<section><h2> Dealer : <span id='dealer-score'></span></h2>
			<div id='dealer-cards'>
				<img id='hide' src='../../images/carte/BACK.png'>
			</div>
		
			<h2>Vos Cartes : <span id='player-score'></span> </h2>
			<div id='player-cards'></div>
			<br>
			<button id='hit'>Prendre une Carte </button>
			<button id='stay'>Garder votre Main </button>
			<p id='result'></p></section>");
		}else {
			echo ("<section class='auth'><div class='box'>
					<div class='container'>
						<div class='form'>
							<form method='POST' action='blackjack.php'>
							<div class='inputBox'>
								<p class='sign'>Mise : </p><input type='number' name='mise'>
							</div>
								<p class ='sign'> Misez pour jouer ! </p>
							<div class='inputBox'>
								<input type='submit' value='Miser'>
							</div>
							</form>
						</div>
					</div>
        		</div></section>");
		}
	}else {
		echo ("<section class='auth'><div class='box'>
					<div class='container'>
						<div class='form'>
							<form method='POST' action='blackjack.php'>
							<div class='inputBox'>
								<p class='sign'>Mise : </p><input type='number' name='mise'>
							</div>
								<p class ='sign'> Misez pour jouer ! </p>
							<div class='inputBox'>
								<input type='submit' value='Miser'>
							</div>
							</form>
						</div>
					</div>
        		</div></section>");
	};
	?>
<footer>
</footer>

</body>
</html>
<?php
/*
include("../../db/db_disconnect.php");
*/
?>