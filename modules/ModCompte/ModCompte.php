<?php

require_once "./modules/ModCompte/cont_compte.php";

class ModCompte{
    private $controleur;

    function __construct(){

        $this->controleur = new ContCompte();


        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        }
        else {
            $action = "profil";
        }

        switch ($action) {
            case 'profil':
                if (!empty($_SESSION['acheteur'])){
                    $email = $_SESSION['acheteur'];
                    $this->controleur->profilAcheteur($email);
                }
                elseif (!empty($_SESSION['admin'])){
                    $email = $_SESSION['admin'];
                    $this->controleur->profilAdmin($email);
                }
                elseif (!empty($_SESSION['vendeur'])){
                    $email = $_SESSION['vendeur'];
                    $this->controleur->profilVendeur($email);
                }
                break;
            case 'supprimer':
                if (!empty($_SESSION['acheteur'])){
                    $email = $_SESSION['acheteur'];
                }
                elseif (!empty($_SESSION['admin'])){
                    $email = $_SESSION['admin'];
                }
                elseif (!empty($_SESSION['vendeur'])){
                    $email = $_SESSION['vendeur'];
                }
                unset($_SESSION['vendeur']);
                $this->controleur->supprimerProfil($email);
                break;
            default:
                header('Location: index.php?module=ModAccueil');
                break;
        }
    }
}

