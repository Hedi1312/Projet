<?php

require_once "./modules/ModGestionVendeurs/cont_gestionVendeurs.php";

class ModGestionVendeurs{
    private $controleur;

    function __construct(){

        $this->controleur = new ContGestionVendeurs();


        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        }
        else {
            $action = "accueil";
        }

        switch ($action) {
            case 'accueil':
               $this->controleur->accueil();
               break;
            case 'form-ajouter':
                $this->controleur->formAjouter();
                break;
            case 'ajouter':
                $this->controleur->ajouter();
                break;
            case 'form-supprimer':
                $this->controleur->formSupprimer();
                break;
            case 'supprimer':
                $this->controleur->supprimer();
                break;
            default:
                header('Location: index.php?module=ModGestionVendeurs');
                break;
        }
    }
}

