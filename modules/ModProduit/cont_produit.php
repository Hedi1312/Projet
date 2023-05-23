<?php

require_once "./Vue/vue_produit.php";
require_once "./modules/ModProduit/modele_produit.php";

class ContProduit
{
    private $modele;
    private $vue;

    function __construct()
    {
        $this->vue = new VueProduit1();
        $this->modele = new ModeleProduit();
    }

    function afficherFormulaireProduit()
    {
        $this->vue->afficherFormulaireProduit();
    }

    function ajouterProduit()
    {
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];

        try {
            $this->modele->ajouterProduit($nom, $description, $prix);
            $this->vue->afficherMessage("Le produit a été ajouté avec succès.", "success", "index.php?module=ModProduit");
        } catch (Exception $e) {
            $this->vue->afficherMessage("Une erreur s'est produite lors de l'ajout du produit.", "danger", "index.php?module=ModProduit");
        }
    }
}

class ContProduit1 {
    // ...

    function afficherProduits() {
        $produits = $this->modele->recupererProduits();
        $this->vue->afficherProduits($produits);
    }

    function afficherFormulaireProduit() {
        // Le code pour afficher le formulaire de produit
        $this->vue->afficherFormulaireProduit();
    }

    // ...

// Ajoutez d'autres méthodes en fonction de vos bes
}
?>