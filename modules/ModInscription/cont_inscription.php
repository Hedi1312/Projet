<?php

require_once "./Vue/vue_inscription.php";
require_once "./modules/ModInscription/modele_inscription.php";

class ContInscription {
    private $modele;
    private $vue;

    function __construct () {
        $this->vue = new VueInscription();
        $this->modele = new ModeleInscription();
    }

    function form_inscription () {
        $this->vue->form_inscription();
    }

    function inscription() {
        $pseudo=$_POST['pseudo'];
        $pseudo=password_hash($pseudo,PASSWORD_DEFAULT);

        $login=$_POST['login'];
        $nom=$_POST['nom'];

         try {
             $this->modele->inscription($pseudo,$login,$nom);
             $this->vue->alerte_message("Votre compte a été crée avec succès</br>Veuillez vous <a href='index.php?module=ModConnexion' class='alert-link'>connecter</a>","success","index.php?module=ModConnexion");
         }
         catch (Exception $e) {
             $this->vue->alerte_message("Erreur l'adresse mail : $login est deja associée à un compte</br>Veuillez réessayer votre <a href='index.php?module=ModInscription' class='alert-link'>inscription</a>","danger","index.php?module=ModInscription");
         }

    }

}
?>
