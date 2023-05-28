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

        $mdp=$_POST['mdp'];
        $mdpSize=strlen(trim($mdp));

        if(!(preg_match('/^(?=.\d)(?=.[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$mdp)) && ($mdpSize<=7)) {
            $message="Le mot de passe doit contenir au moins 1 majuscule, 1 chiffre et doit faire 8 caractères minimum.</br>Veuillez réessayer votre <a href='index.php?module=ModInscription' class='alert-link'>inscription</a>";
            $this->vue->alerte_message($message,"danger","index.php?module=ModInscription");
        }

        else {
            $mdp=password_hash($mdp,PASSWORD_DEFAULT);
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $pseudo=$_POST['pseudo'];
            $adresse1=$_POST['adresse1'];
            $adresse2=$_POST['adresse2'];
            $ville=$_POST['ville'];
            $codePostal=$_POST['codePostal'];
            $pays=$_POST['pays'];
            $numero=$_POST['numero'];
            $email=$_POST['email'];


            try {
                $this->modele->inscription($nom,$prenom,$pseudo,$adresse1,$adresse2,$ville,$codePostal,$pays,$numero,$email,$mdp);
                $this->vue->alerte_message("Votre compte a été crée avec succès</br>Veuillez vous <a href='index.php?module=ModConnexion' class='alert-link'>connecter</a>","success","index.php?module=ModConnexion");
            }
            catch (Exception $e) {
                $this->vue->alerte_message("Erreur l'adresse mail : $email est deja associée à un compte</br>Veuillez réessayer votre <a href='index.php?module=ModInscription' class='alert-link'>inscription</a>","danger","index.php?module=ModInscription");
            }
        }

    }

}
?>
