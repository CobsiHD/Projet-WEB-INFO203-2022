<?php

session_start();
if (!isset($_SESSION["log"])) {
    header("Location:../../admin/pages/auth/login.php");
} elseif (!($_SESSION["log"])) {
    header("Location:../../admin/pages/auth/login.php");
} else {
    $_SESSION["pages"] = "http://os-vps418.infomaniak.ch:1180/l1_info_5/www/pages/Dice/index.php";
    $_SESSION["jeux"] = "des";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../../css/styles_mises.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

<?php
if (isset($_POST["mise"])){
    if ($_POST["mise"]!=""){
        echo("<section class='container'>
            <div id='cube'>
                <div class='front' id='1'>
                    <span class='dot dot1'></span>
                </div>
                <div class='back' id='2'>
                    <span class='dot dot1'></span>
                    <span class='dot dot2'></span>
                </div>

                <div class='right' id='3'>
                    <span class='dot dot1'></span>
                    <span class='dot dot2'></span>
                    <span class='dot dot3'></span>
                </div>
                <div class='left' id='4'>
                    <span class='dot dot1'></span>
                    <span class='dot dot2'></span>
                    <span class='dot dot3'></span>
                    <span class='dot dot4'></span>
                </div>
                <div class='top' id='5'>
                    <span class='dot dot1' ></span>
                    <span class='dot dot2'></span>
                    <span class='dot dot3'></span>
                    <span class='dot dot4'></span>
                    <span class='dot dot5'></span>
                </div>

                <div class='bottom' id='6'>
                    <span class='dot dot1'></span>
                    <span class='dot dot2'></span>
                    <span class='dot dot3'></span>
                    <span class='dot dot4'></span>
                    <span class='dot dot5'></span>
                    <span class='dot dot6'></span>
                </div>
            </div>

            <div class='fomulaire'>
                <label for='nb'>Entrez votre choix</label>
                <input type='number' id=nb name='nombre' required minlength='0' maxlength='4' size='10'>
            </div>");
        $_SESSION["mise"]=$_POST["mise"];
    }else {
        echo ("<section class='auth'><div class='box'>
					<div class='container1'>
						<div class='form'>
							<form method='POST' action='index.php'>
                            <p class='sign'><a href='../../index.php'>Retourné à l'accueil</a></p>
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
					<div class='container1'>
						<div class='form'>
							<form method='POST' action='index.php'>
                            <p class='sign'><a href='../../index.php'>Retourné à l'accueil</a></p>
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



            <script>
                var cube = document.getElementById('cube');

                var min = 1;
                var max = 6;
                var win = false;

                cube.onclick = function() {
                    var nb = document.getElementById("nb").value;
                    var rand = getRandom(max, min);
                    var win = false;

                    if(rand === 6){
                        var yrand = 0;
                        var xrand = -1620;
                    } else if( rand === 5){
                        var yrand = 0;
                        var xrand = -1530;
                    }else if( rand === 4){
                        var yrand = 1530;
                        var xrand = 0;
                    }else if( rand === 3){
                        var yrand = -1530;
                        var xrand = 0;
                    }else if( rand === 2){
                        var yrand = 0;
                        var xrand = 1530;
                    }else if( rand === 1){
                        var yrand = 1440;
                        var xrand = 1440;
                    }

                    let yrot = 1800 +yrand;
                    let xrot = 1800 +xrand;

                    cube.style.transform = 'rotateX('+xrot+'deg) rotateY('+yrot+'deg)';

                    if(parseInt(nb) === rand){
                        win = true;
                    }

                    console.log(rand);
                    console.log(nb);
                    console.log(win);
                    setTimeout(desGagne,4000);

                    return win;

                }

                function desGagne(){

                    window.location.replace("http://os-vps418.infomaniak.ch:1180/l1_info_5/www/pages/replay.php?win=" + win);

                }


                function getRandom(max, min) {
                    return (Math.floor(Math.random() * (max-min)) + min);

                }



            </script>
        </section>


</body>

</html>