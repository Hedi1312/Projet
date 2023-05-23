<?php

require_once "./Vue/Vue.php";
class VueInscription{
 
    function form_inscription() {
        Vue::render("Affichage/inscription.php",["titre"=>"Inscription acheteur"]);
    }

    function alerte_message($message,$alerte,$url) {
        Vue::alerte_message($message,$alerte,$url);
    }

    function form_connexion() {
        Vue::render("Affichage/connexionAccueil.php",["titre"=>"Connexion"]);
    }

}

?>