<?php

require_once "./Vue/vue_gestionVendeurs.php";
require_once "./modules/ModGestionVendeurs/modele_gestionVendeurs.php";

class ContGestionVendeurs {
    private $modele;
    private $vue;


    function __construct () {
        $this->vue = new VueGestionVendeurs();
        $this->modele = new ModeleGestionVendeurs();
    }

    function accueil () {
        $this->vue->accueil();
    }

    public function formAjouter(){
        $this->vue->formAjouter();
    }

    public function ajouter(){

        $pseudo=$_POST['pseudo'];
        $email=$_POST['email'];
        $nom=$_POST['nom'];

        $img_name = $_FILES['imageVendeur']['name'];
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;

        $origine = $_FILES['imageVendeur']['tmp_name'];
        $destination = "Vue/Affichage/img/profil/".$new_img_name;

        move_uploaded_file($origine,$destination);

        try {
            $this->modele->ajoutVendeur($pseudo,$email,$nom, $destination);
            $this->vue->alerte_message("Un acheteur a été crée avec succès</br>Retour sur <a href='index.php?module=ModGestionVendeurs' class='alert-link'>l'accueil</a>","success","index.php?module=ModGestionVendeurs");
        }
        catch (Exception $e) {
            $this->vue->alerte_message("Erreur l'adresse mail : $email est deja associée à un compte</br>Veuillez réessayer votre <a href='index.php?module=ModGestionVendeurs&action=form-ajouter' class='alert-link'>ajout de vendeur</a>","danger","index.php?module=ModGestionVendeurs&action=form-ajouter");
        }

    }

    public function formSupprimer(){
        $listeVendeurs = $this->modele->getListeVendeur();
        $this->vue->formSupprimer($listeVendeurs);
    }

    public function supprimer(){
        $idVendeur = $_GET["id"];
        $this->modele->supprimerVendeur($idVendeur);
        header('Location: index.php?module=ModGestionVendeurs&action=form-supprimer');
    }


}
?>
