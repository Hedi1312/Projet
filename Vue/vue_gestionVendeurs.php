<?php
require_once "./Vue/Vue.php";

class VueGestionVendeurs{

    function accueil(){
        Vue::render("Affichage/gestionVendeurs_accueil.php",["titre"=>"Accueil gestion vendeurs"]);
    }
    function formAjouter(){
        Vue::render("Affichage/gestionVendeurs_ajouter.php",["titre"=>"Ajouter vendeurs"]);
    }

    function formSupprimer($listeVendeurs){
        $data["titre"] = "Supprimer vendeurs";
        $data["listeVendeurs"] = $listeVendeurs;
        Vue::render("Affichage/gestionVendeurs_supprimer.php",$data);
    }

    function alerte_message($message,$alerte,$url) {
        Vue::alerte_message($message,$alerte,$url);
    }
}