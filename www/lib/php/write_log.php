<?php
include("../../admin/lib/crud/classements.crud");
if(isset($_SESSION["log"]) && isset($_SESSION["user"])){
    if(!$_SESSION["log"]){
        echo("<ul class='navbar-nav ml-auto'>
        <li class='nav-item'><a href='../../admin/pages/auth/login.php' class='nav-link rp-4'>Se connecter</a></li>
                    <li class='nav-item'><a href='../../admin/pages/auth/create_account.php' class='nav-link rp-4'>s'inscrire</a></li>
    </ul>");
    } else {
        echo("<ul> class='navbar-nav ml-auto'>");
        echo("<li class='nav-item'><img src='../../images/img_profil.jpeg'></li>");
        echo("<li class='nav-item'> <ul><li>User :");
        echo($_SESSION["user"]);
        echo("</li><li> Votre Monnaie :");
        $info_user=select_class($conn,$_SESSION["user"]);
        echo($info_user["general"]);
        echo("</li><li>");
        echo("<a href='../../pages/info_account.php'>Cliquez-ici pour plus d'info</a></li><li><a href='./admin/pages/disconnect.php'>Deconnexion</a></li></ul></li></ul>");
    }
} else {
    echo("<ul class='navbar-nav ml-auto'>
        <li class='nav-item'><a href='../../admin/pages/auth/login.php' class='nav-link rp-4'>Se connecter</a></li>
                    <li class='nav-item'><a href='../../admin/pages/auth/create_account.php' class='nav-link rp-4'>s'inscrire</a></li>
    </ul>");
}
?>
