<?php
require_once "./Vue/Vue.php";

class VuePageProduit{

    function pageProduit($infosArticles){
        $data["titre"] = $infosArticles["nomProduit"];
        $data["infosArticles"] = $infosArticles;
        Vue::render("Affichage/page_article.php",$data);
    }
}
