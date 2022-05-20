<?php
include("./admin/lib/crud/classements.crud.php");
if(isset($_SESSION["log"]) && isset($_SESSION["user"])){
    if(!$_SESSION["log"]){
        echo("<ul class='navbar-nav ml-auto'>
        <li class='nav-item'><a href='./admin/pages/auth/login.php' class='nav-link rp-4'>Se connecter</a></li>
                    <li class='nav-item'><a href='./admin/pages/auth/create_account.php' class='nav-link rp-4'>s'inscrire</a></li>
    </ul>");
    } else {
        echo('<div id="navbarSupportedContent" class="collapse navbar-collapse">');
        echo("<ul class='navbar-nav  ml-auto'>");
        $info_user=select_class($conn,$_SESSION["user"]);

        echo("<li class='nav-item'><a class='nav-link'>");
        echo($info_user["general"]);
        echo("<img class='piece' src='./images/piece.png' alt='piece'>");
        echo("</a></li>");

        echo("<li class='nav-item'><a class='nav-link'>");
        print($_SESSION["user"]);
        echo("<img class='profil' src='./images/profil.png' alt='piece'>");
        echo("</a></li>");



        echo("<li class='nav-item' ><a class='nav-link' href='./pages/info_account.php'>Info Compte</a></li>
              <li class='nav-item'><a class='nav-link' href='./admin/pages/disconnect.php'>Deconnexion</a></li></ul></div>");
    }
} else {
    echo("<ul class='navbar-nav ml-auto'>
        <li class='nav-item'><a href='./admin/pages/auth/login.php' class='nav-link rp-4'>Se connecter</a></li>
                    <li class='nav-item'><a href='./admin/pages/auth/create_account.php' class='nav-link rp-4'>s'inscrire</a></li>
    </ul>");
}
?>
