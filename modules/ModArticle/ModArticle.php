<?php

require_once "./modules/ModArticle/cont_article.php";

class ModArticle{
    private $controleur;

    function __construct(){

        $this->controleur = new ContArticle();

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
            case 'supprimer':
                $this->controleur->supprimer();
                break;

            default:
                header('Location: index.php?module=ModArticle');
                break;
        }
    }


}
