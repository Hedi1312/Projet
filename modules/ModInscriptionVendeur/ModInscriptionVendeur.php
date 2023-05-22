<?php

require_once "./modules/ModInscriptionVendeur/cont_inscriptionVendeur.php";

class ModInscriptionVendeur {
    private $controleur;

    function __construct () {
    
        $this->controleur=new ContInscriptionVendeur();

        if(isset($_GET['action'])) {
            $action=$_GET['action'];
        }
        else {
            $action="formulaire";
        }

        switch ($action) {
            case 'formulaire' :
                $this->controleur->form_inscription();
                break;
            case 'inscription' :
                $this->controleur->inscription();
                break;
            default:
                $this->controleur->form_inscription();
                break;
        }
    }
}

?>
