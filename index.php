<?php

require_once "./Connexion.php";
require_once "./Vue/Vue.php";
session_start();

if (!isset($_GET['module'])) {
    $module="ModAccueil";
}
else {
    $module = $_GET['module'];
}

Connexion::initConnexion();

switch ($module) {

    case "ModCompte":
        if (!empty($_SESSION)) {
            require_once "./modules/$module/$module.php";
            new $module();
            break;
        }
        Vue::alerte_message("Interdiction d'accès !</br>Veuillez revenir à <a href='index.php?module=ModAccueil' class='alert-link'>l'accueil</a>","danger","index.php?module=ModAccueil");
        break;

    case 'ModGestionVendeurs' :
        if (!empty($_SESSION['admin'])) {
            require_once "./modules/$module/$module.php";
            new $module();
            break;
        }
        Vue::alerte_message("Interdiction d'accès !</br>Veuillez revenir à <a href='index.php?module=ModAccueil' class='alert-link'>l'accueil</a>","danger","index.php?module=ModAccueil");
        break;

    case "ModArticle":
        if (!empty($_SESSION['admin']) || !empty($_SESSION['vendeur'])) {
            require_once "./modules/$module/$module.php";
            new $module();
            break;
        }
        Vue::alerte_message("Interdiction d'accès !</br>Veuillez revenir à <a href='index.php?module=ModAccueil' class='alert-link'>l'accueil</a>","danger","index.php?module=ModAccueil");
        break;

    case "ModInscription":
    case "ModConnexion":
    case "ModPageproduit" :
    case "ModAccueil":
    case "ModToutparcourir":
        require_once "./modules/$module/$module.php";
        new $module();
        break;

    default :
        die(Vue::alerte_message("Interdiction d'accès !</br>Veuillez revenir à <a href='index.php?module=ModAccueil' class='alert-link'>l'accueil</a>","danger","index.php?module=ModAccueil"));
}

?>

