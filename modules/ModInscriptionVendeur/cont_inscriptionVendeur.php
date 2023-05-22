<?php

require_once "./Vue/vue_inscriptionVendeur.php";
require_once "./modules/ModInscriptionVendeur/modele_inscriptionVendeur.php";

class ContInscriptionVendeur {
    private $modele;
    private $vue;

    function __construct () {
        $this->vue = new VueInscriptionVendeur();
        $this->modele = new ModeleInscriptionVendeur();
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
             $this->vue->alerte_message("Votre compte a été crée avec succès</br>Veuillez vous <a href='index.php?module=ModConnexionVendeur' class='alert-link'>connecter</a>","success","index.php?module=ModConnexionVendeur");
         }
         catch (Exception $e) {
             $this->vue->alerte_message("Erreur l'adresse mail : $login est deja associée à un compte</br>Veuillez réessayer votre <a href='index.php?module=ModInscriptionVendeur' class='alert-link'>inscription</a>","danger","index.php?module=ModInscriptionVendeur");
         }

    }

}
?>
