<?php
session_start();
if (!isset($_SESSION["log"])){
    header("Location:../../admin/pages/auth/login.php") ;
} elseif (!($_SESSION["log"])){
    header("Location:../../admin/pages/auth/login.php") ;
} else {
    $_SESSION["pages"]="http://os-vps418.infomaniak.ch:1180/l1_info_5/www/pages/Bonneteau/index.php";
    $_SESSION["jeux"]="bonneteau";
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bonneteau</title>
    <link rel="stylesheet" type="text/css" href="css/styleBonneteau.css">
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body>


<?php
if (isset($_POST["mise"])){
    if ($_POST["mise"]!=""){
        echo("<div class='container'>
    <h1 class='titre'>Bonneteau</h1>
    <h3 class='slogan'>La carte rouge gagne et les cartes noires perdent</h3>

    <div class='cards'>
        <div class='card' onclick='flip(event); gagner(event);' >

            <div class='front'>
                <img class='card-img coeur' src='images/A-H.png' width='200' alt='As de Coeur'>
            </div>
            <div class='back'></div>
        </div>
        <div class='card' onclick='flip(event); gagner(event);'>

            <div class='front'>
                <img class='card-img pique' src='images/A-S.png' width='200' alt='As de Pique'>
            </div>
            <div class='back'></div>
        </div>
        <div class='card' onclick='flip(event); gagner(event);'>

            <div class='front'>
                <img class='card-img pique' src='images/A-S.png' width='200' alt='As de Pique'>
            </div>
            <div class='back'></div>
        </div>
    </div>

</div>");
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
}
?>

<!-- script javascript -->
<script src="js/bonneteauSrc.js"></script>

</body>
</html>