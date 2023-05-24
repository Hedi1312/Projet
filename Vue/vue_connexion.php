<?php

require_once "./Vue/Vue.php";
class VueConnexion {

    function accueil() {
        Vue::render("Affichage/connexionAccueil.php",["titre"=>"Connexion"]);
    }
    function form_connexionVendeur() {
        Vue::render("Affichage/connexionVendeur.php",["titre"=>"Connexion Vendeur"]);
    }

    function form_connexionAcheteur() {
        Vue::render("Affichage/connexionAcheteur.php",["titre"=>"Connexion Acheteur"]);
    }

    function form_connexionAdmin() {
        Vue::render("Affichage/connexionAdmin.php",["titre"=>"Connexion Admin"]);
    }

    function alerte_message($message,$alerte,$url) {
        Vue::alerte_message($message,$alerte,$url);
    }
}

?>