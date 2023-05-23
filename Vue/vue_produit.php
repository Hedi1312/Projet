<?php

require_once "./Vue/Vue.php";

class VueProduit {
    function afficherFormulaireProduit() {
        Vue::render("Affichage/produit.php", ["titre" => "Formulaire de produit"]);
    }

    function afficherMessage($message, $type, $redirect) {
        Vue::render("Affichage/message.php", ["message" => $message, "type" => $type, "redirect" => $redirect]);
    }

    // Ajoutez d'autres méthodes en fonction de vos besoins, par exemple :
    // - Afficher la liste des produits
    // - Afficher les détails d'un produit, etc.
}
class VueProduit1 {
    // ...
    function afficherProduits($produits) {
        foreach ($produits as $produit) {
            $this->afficherProduit($produit);
        }
    }

    function afficherProduit($produit) {
        $nom = $produit['nom'];
        $description = $produit['description'];
        $prix = $produit['prix'];
        // Vous pouvez ajouter d'autres champs si nécessaire

        include "./Vue/produit.php";
    }
}




?>
