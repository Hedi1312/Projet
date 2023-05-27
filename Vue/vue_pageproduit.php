<?php
require_once "./Vue/Vue.php";

class VuePageproduit{

    function pagePageproduit(){
        Vue::render("Affichage/pageproduit.php",["titre"=>"Page Produit"]);
    }
}
