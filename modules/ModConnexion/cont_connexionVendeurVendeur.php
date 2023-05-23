<?php

require_once "./Vue/vue_connexionVendeurVendeur.php";
require_once "./modules/ModConnexion/modele_connexionVendeurVendeur.php";

class ContConnexionVendeur {
    private $modele;
    private $vue;

    function __construct () {
        $this->vue = new VueConnexionVendeur();
        $this->modele = new ModeleConnexionVendeur();
    }

    function test_connexion () {
        $this->vue->form_connexion();
    }

    function connexion () {

        $login=$_POST['login'];
        $pseudo=$_POST['pseudo'];
        $user=$this->modele->connexion($login);
        if(!empty($user)) {
            $count=password_verify($pseudo,$user['pseudo']);

            if($count) {
                $_SESSION['login']=$login;
                header('Location: index.php?module=ModAccueil');

                exit();
            }
            else {
                $this->vue->alerte_message("L'adresse mail ou le pseudo saisie est incorrecte</br>Veuillez réessayer de vous <a href='index.php?module=ModConnexion' class='alert-link'>connecter</a>","danger","index.php?module=ModConnexion");
            }
        }

        else {
            $this->vue->alerte_message("L'adresse mail $login n'appartient à aucun compte</br>Veuillez réessayer de vous <a href='index.php?module=ModConnexion' class='alert-link'>connecter </a>ou vous <a href='index.php?module=ModInscription' class='alert-link'>inscrire</a>","danger","index.php?module=ModInscription");
        }

    }

    function deconnexion() {
        unset($_SESSION['login']);
        $this->vue->form_connexion();
    }
}
?>
