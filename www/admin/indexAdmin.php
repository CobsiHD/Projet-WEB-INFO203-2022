<?php
include('lib/crud/authentification.crud.php')

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



<?php

$conn = mysqli_connect("localhost", "l1_info_5", "FY45", "l1_info_5");
mysqli_set_charset($conn, "utf8");


if (isset($_POST["loginModif"]) &&
    isset($_POST["pwdModif"]))
{
    $log=$_POST["loginModif"];
    $pwd=$_POST["pwdModif"];


    update_auth($conn, $log, $pwd);
}

if (isset($_POST["loginSuppr"]))
{
    $log=$_POST["loginSuppr"];

    delete_auth($conn, $log);
}

?>
</body>

</html>

