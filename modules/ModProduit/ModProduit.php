<?php

require_once "./modules/ModProduit/cont_produit.php";

class ModProduit {
    private $controleur;

    function __construct() {
        $this->controleur = new ContProduit1();

        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = "formulaire";
        }

        switch ($action) {
            case 'ajouter':
                $this->controleur->ajouterProduit();
                break;
            default:
                $this->controleur->afficherFormulaireProduit();
                break;

            case 'afficher':
                $this->controleur->afficherProduits();
                break;
        }
    }
}

?>
