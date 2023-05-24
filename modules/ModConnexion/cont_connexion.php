<?php

require_once "./Vue/vue_connexion.php";
require_once "./modules/ModConnexion/modele_connexion.php";

class ContConnexion {
    private $modele;
    private $vue;

    function __construct () {
        $this->vue = new VueConnexion();
        $this->modele = new ModeleConnexion();
    }

    function accueil () {
        $this->vue->accueil();
    }

    function form_connexionVendeur () {
        $this->vue->form_connexionVendeur();
    }

    function form_connexionAcheteur () {
        $this->vue->form_connexionAcheteur();
    }

    function form_connexionAdmin () {
        $this->vue->form_connexionAdmin();
    }


    function connexionAcheteur() {
        $email=$_POST['email'];
        $mdp=$_POST['mdp'];
        $user=$this->modele->connexionAcheteur($email);
        if(!empty($user)) {
            $count=password_verify($mdp,$user['mdp']);

            if($count) {
                $_SESSION['acheteur']=$email;
                header('Location: index.php?module=ModAccueil');

                exit();
            }
            else {
                $this->vue->alerte_message("L'adresse mail ou le pseudo saisie est incorrecte</br>Veuillez réessayer de vous <a href='index.php?module=ModConnexion' class='alert-link'>connecter</a>","danger","index.php?module=ModConnexion");
            }
        }

        else {
            $this->vue->alerte_message("L'adresse mail $email n'appartient à aucun compte</br>Veuillez réessayer de vous <a href='index.php?module=ModConnexion' class='alert-link'>connecter </a>ou vous <a href='index.php?module=ModInscription' class='alert-link'>inscrire</a>","danger","index.php?module=ModInscription");
        }
    }

    function connexionVendeur() {
        $pseudo=$_POST['pseudo'];
        $email=$_POST['email'];
        $user=$this->modele->connexionVendeur($email);

        if(!empty($user)) {
            $mdp=password_hash($pseudo,PASSWORD_DEFAULT);
            $count=password_verify($user['pseudo'],$mdp);

            if($count) {
                $_SESSION['vendeur']=$email;
                header('Location: index.php?module=ModAccueil');

                exit();
            }
            else {
                $this->vue->alerte_message("L'adresse mail ou le pseudo saisie est incorrecte</br>Veuillez réessayer de vous <a href='index.php?module=ModConnexion' class='alert-link'>connecter</a>","danger","index.php?module=ModConnexion");
            }
        }

        else {
            $this->vue->alerte_message("L'adresse mail $email n'appartient à aucun compte</br>Veuillez réessayer de vous <a href='index.php?module=ModConnexion' class='alert-link'>connecter </a>ou vous <a href='index.php?module=ModInscription' class='alert-link'>inscrire</a>","danger","index.php?module=ModInscription");
        }
    }

    function connexionAdmin() {
        $pseudo=$_POST['pseudo'];
        $email=$_POST['email'];
        $mdp=$_POST['mdp'];
        $user=$this->modele->connexionAdmin($pseudo);
        if(!empty($user)) {
            $count=password_verify($email,$user['email']);
            $count2=password_verify($mdp,$user['mdp']);

            if($count && $count2) {
                $_SESSION['admin']=$email;
                header('Location: index.php?module=ModAccueil');

                exit();
            }
            else {
                $this->vue->alerte_message("L'adresse mail ou le pseudo saisie est incorrecte</br>Veuillez réessayer de vous <a href='index.php?module=ModConnexion' class='alert-link'>connecter</a>","danger","index.php?module=ModConnexion");
            }
        }

        else {
            $this->vue->alerte_message("Le pseudo $pseudo n'appartient à aucun compte</br>Veuillez réessayer de vous <a href='index.php?module=ModConnexion' class='alert-link'>connecter </a>ou vous <a href='index.php?module=ModInscription' class='alert-link'>inscrire</a>","danger","index.php?module=ModInscription");
        }
    }

    function deconnexion() {
        if (!empty($_SESSION['acheteur'])) {
            unset($_SESSION['acheteur']);
        }
        elseif (!empty($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }
        elseif (!empty($_SESSION['vendeur'])){
            unset($_SESSION['vendeur']);
        }

        $this->vue->accueil();
    }
}
?>
