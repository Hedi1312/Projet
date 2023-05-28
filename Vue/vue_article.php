<?php

require_once "./Vue/Vue.php";

class VueArticle{

    function accueil($listeArticles){
        $data["titre"] = "Mes articles";
        $data["listeArticles"] = $listeArticles;
        Vue::render("Affichage/article_accueil.php",$data);
    }

    function formAjouter(){
        Vue::render("Affichage/article_ajouter.php",["titre"=>"Ajouter article"]);
    }

    function alerte_message($message,$alerte,$url) {
        Vue::alerte_message($message,$alerte,$url);
    }

}