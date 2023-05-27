<?php
require_once "./Vue/Vue.php";

class VueGestionVendeurs{

    function accueil(){
        Vue::render("Affichage/gestionVendeurs_accueil.php",["titre"=>"Accueil gestion vendeurs"]);
    }
    function formAjouter(){
        Vue::render("Affichage/gestionVendeurs_ajouter.php",["titre"=>"Ajouter vendeurs"]);
    }

    function formSupprimer(){
        Vue::render("Affichage/gestionVendeurs_supprimer.php",["titre"=>"Supprimer vendeurs"]);
    }

    function alerte_message($message,$alerte,$url) {
        Vue::alerte_message($message,$alerte,$url);
    }
}