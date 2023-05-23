<?php

require_once "./modules/ModConnexion/cont_connexion.php";

class ModConnexion{
    private $controleur;

    function __construct(){

        $this->controleur = new ContConnexionVendeur();


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
            case 'formulaireVendeur' :
                $this->controleur->form_connexionVendeur();
                break;
            case 'formulaireAcheteur' :
                $this->controleur->form_connexionAcheteur();
                break;
            case 'formulaireAdmin' :
                $this->controleur->form_connexionAdmin();
                break;
            case 'connexion' :
                $this->controleur->connexion();
                break;
            case 'deconnexion':
                $this->controleur->deconnexion();
                break;
            default:
                $this->controleur->accueil();
                break;
        }
    }
}

