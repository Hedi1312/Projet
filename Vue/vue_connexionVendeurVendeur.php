<?php

require_once "./Vue/Vue.php";
class VueConnexionVendeur {

    function form_connexion() {
        Vue::render("Affichage/connexionVendeur.php",["titre"=>"Connexion Vendeur"]);
    }

    function alerte_message($message,$alerte,$url) {
        Vue::alerte_message($message,$alerte,$url);
    }
}

?>