<?php

require_once "./modules/ModConnexionVendeur/cont_connexionVendeurVendeur.php";

class ModConnexionVendeur{
    private $controleur;

    function __construct(){

        $this->controleur = new ContConnexionVendeur();


        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        }
        else {
            $action = "formulaire";
        }

        switch ($action) {
            case 'formulaire' :
                $this->controleur->test_connexion();
                break;
            case 'connexion' :
                $this->controleur->connexion();
                break;
            case 'deconnexion':
                $this->controleur->deconnexion();
                break;
            default:
                $this->controleur->test_connexion();
                break;
        }
    }
}

