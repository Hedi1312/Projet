<?php

require_once './modules/ModPanier/cont_panier.php';

class ModPanier {
    private $controleur;

    public function __construct(){
        $this->controleur = new ContPanier();
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        }
        else {
            $action = "PagePanier";
        }
        switch ($action) {
            case 'PagePanier':
                $this->controleur->afficherPagePanier();
                break;

            default :
                header('Location: index.php?module=ModPanier');
                break;
        }

    }
}