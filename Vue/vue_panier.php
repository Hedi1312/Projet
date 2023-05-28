<?php
require_once "./Vue/Vue.php";

class VuePanier{

    function pagePanier(){
        $data["titre"] = "Mon panier";
        Vue::render("Affichage/panier.php",$data);
    }
}