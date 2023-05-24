<?php

require_once "./Vue/vue_compte.php";
require_once "./modules/ModCompte/modele_compte.php";

class ContCompte {
    private $modele;
    private $vue;

    function __construct () {
        $this->vue = new VueCompte();
        $this->modele = new ModeleCompte();
    }

    function profilAcheteur ($email) {
        $profil = $this->modele->getProfilAcheteur($email);
        $this->vue->profil($profil);
    }

    function profilAdmin ($email) {
        $profil = $this->modele->getProfilAdmin($email);
        $this->vue->profil($profil);
    }

    function profilVendeur ($email) {
        $profil = $this->modele->getProfilVendeur($email);
        $this->vue->profil($profil);
    }

    public function supprimerProfil($email){
        $this->modele->supprimerLeProfil($email);
        $this->vue->alerte_message("Vous venez de supprimer votre compte</br>Veuillez vous <a href='index.php?module=ModConnexion' class='alert-link'>connecter</a>","danger","index.php?module=ModConnexion");
    }


}
?>
