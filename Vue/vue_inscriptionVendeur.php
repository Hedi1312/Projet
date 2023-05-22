<?php

require_once "./Vue/Vue.php";
class VueInscriptionVendeur{
 
    function form_inscription() {
        Vue::render("Affichage/inscriptionVendeur.php",["titre"=>"Inscription Vendeur"]);
    }

    function alerte_message($message,$alerte,$url) {
        Vue::alerte_message($message,$alerte,$url);
    }

    function form_connexion() {
        Vue::render("Affichage/connexionVendeur.php",["titre"=>"Connexion Vendeur"]);
    }

}

?>