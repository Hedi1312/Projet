<?php

require_once "./Vue/vue_panier.php";
require_once "./modules/ModPanier/modele_panier.php";

class ContPanier {
    private $modele;
    private $vue;

    function __construct () {
        $this->vue = new VuePanier();
        $this->modele = new ModelePanier();
    }

    function afficherPagePanier(){
//        $infoPanier = $this->modele->getPanier();
        $this->vue->pagePanier();
    }
}