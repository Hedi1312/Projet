<?php
require_once "./Vue/Vue.php";

class VueToutparcourir{

    function pageToutparcourir(){
        Vue::render("Affichage/toutparcourir.php",["titre"=>"Tout Parcourir"]);
    }
}