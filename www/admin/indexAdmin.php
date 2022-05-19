<?php
include('lib/crud/authentification.crud.php');
include('lib/crud/classements.crud.php');
session_start();
if (isset($_SESSION["user"])){
    if ($_SESSION["user"]!="admin"){
        header("Location:../index.php");
    }else {
        header("Location:indexAdmin.php");
    }
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
</head>

<body>

<table>
        <h1>Modifier un Utilisateur</h1>

        <form method="post" action="indexAdmin.php" enctype="multipart/formdata">
            <tr>
                <td>
                    <label for="loginModif">Login :</label>
                </td>
                <td>
                    <input type="text" name="loginModif" id="loginModif">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pwdModif">Mot de passe :</label>
                </td>
                <td>
                    <input type="password" name="pwdModif" id="pwdModif">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Modifier">
                </td>
            </tr>
        </form>
</table>

<table>
    <h1>Supprimer un Utilisateur</h1>

    <form method="post" action="indexAdmin.php" enctype="multipart/formdata">
        <tr>
            <td>
                <label for="loginSuppr">Login :</label>
            </td>
            <td>
                <input type="text" name="loginSuppr" id="loginSuppr">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Supprimer">
            </td>
        </tr>
    </form>
</table>

<table>
    <h1>Modifier le classement</h1>

    <form method="post" action="indexAdmin.php" enctype="multipart/formdata">
        <tr>
            <td>
                <label for="loginClass">Login :</label>
            </td>
            <td>
                <input type="text" name="loginClass" id="loginClass">
            </td>
        </tr>
        <tr>
            <td>
                <label for="general">Sous total :</label>
            </td>
            <td>
                <input type="number" name="general" id="general">
            </td>
        </tr>
        <tr>
            <td>
                <label for="des">Sous pour le dés :</label>
            </td>
            <td>
                <input type="number" name="des" id="des">
            </td>
        </tr>
        <tr>
            <td>
                <label for="bonneteau">Sous pour le bonneteau :</label>
            </td>
            <td>
                <input type="number" name="bonneteau" id="bonneteau">
            </td>
        </tr>
        <tr>
            <td>
                <label for="roulette">Sous pour la roulette :</label>
            </td>
            <td>
                <input type="number" name="roulette" id="roulette">
            </td>
        </tr>
        <tr>
            <td>
                <label for="blackjack">Sous pour le blackjack :</label>
            </td>
            <td>
                <input type="number" name="blackjack" id="blackjack">
            </td>
        </tr>
        <tr>
            <td>
                <label for="machine_a_sous">Sous pour la machine à sous :</label>
            </td>
            <td>
                <input type="number" name="machine_a_sous" id="machine_a_sous">
            </td>
        </tr>
        <tr>
            <td>
                <label for="chevaux">Sous pour les chevaux :</label>
            </td>
            <td>
                <input type="number" name="chevaux" id="chevaux">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Modifier">
            </td>
        </tr>
    </form>
</table>


<?php

$conn = mysqli_connect("localhost", "l1_info_5", "FY45", "l1_info_5");
mysqli_set_charset($conn, "utf8");


if (isset($_POST["loginModif"]) &&
    isset($_POST["pwdModif"]))
{
    $log=$_POST["loginModif"];
    $pwd=$_POST["pwdModif"];
    $pwd= md5($pwd);


    update_auth($conn, $log, $pwd);
}

if (isset($_POST["loginSuppr"]))
{
    $log=$_POST["loginSuppr"];

    delete_auth($conn, $log);
}


if (isset($_POST["loginClass"]) &&
    isset($_POST["general"])   &&
    isset($_POST["des"]) &&
    isset($_POST["bonneteau"]) &&
    isset($_POST["roulette"]) &&
    isset($_POST["blackjack"]) &&
    isset($_POST["machine_a_sous"]) &&
    isset($_POST["chevaux"]))
{
    $user=$_POST["loginClass"];
    $general=$_POST["general"];
    $des=$_POST["des"];
    $bonneteau=$_POST["bonneteau"];
    $bonneteau=$_POST["bonneteau"];
    $roulette=$_POST["roulette"];
    $blackjack=$_POST["blackjack"];
    $machine_a_sous=$_POST["machine_a_sous"];
    $chevaux=$_POST["chevaux"];


    update_class($conn, $user,$general,$des,$bonneteau,$roulette,$blackjack,$machine_a_sous,$chevaux);
}

?>
</body>

</html>

