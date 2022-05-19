<?php
/*
include("../../db/db_connect.php");
session_start();
if (!isset($_SESSION["start"]) or $_SESSION["start"]==0.0){
	header("Location:../../admin/pages/auth/login.php");
} else if (isset($_SESSION["start"])){
	header("Location:blackjack.php")
}*/
?>


<html>
<head>
	<meta charset="UTF-8">
    <title> BlackJack </title>
	<link rel="stylesheet" href="../../css/styles_blackjack.css">
	<script src = "../../lib/js/script_blackjack.js"></script>
</head>
<body>
<header>
</header>
<section>
	<h2> Dealer : <span id="dealer-sum"></span></h2>
	<div id="dealer-cards">
		<img id="hide" src="../../images/carte/BACK.png">
	</div>"

	<h2>Vos Cartes : <span id="player-sum"></span> </h2>
	<div id="player-cards"></div>
	<br>
	<button id="hit">Prendre une Carte </button>
	<button id="stay">Garder votre Main </button>
	<p id="result"></p>
</section>
<footer>
</footer>

</body>
</html>
<?php
/*
include("../../db/db_disconnect.php");
*/
?>