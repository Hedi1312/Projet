<?php

require_once "./Connexion.php";

class ModeleProduit extends Connexion {

    public function ajouterProduit($nom, $description, $prix) {

        $requete = self::$bdd->prepare("INSERT INTO produits (`nom`, `description`, `prix`) VALUES (:nom, :description, :prix);");
        $requete->bindParam('nom', $nom);
        $requete->bindParam('description', $description);
        $requete->bindParam('prix', $prix);
        $requete->execute();
    }

    public function recupererProduits() {
        $requete = self::$bdd->prepare("SELECT * FROM produits;");
        $requete->execute();

        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }


    // Ajoutez d'autres méthodes en fonction de vos besoins, par exemple :
    // - Modifier un produit
    // - Supprimer un produit
    // - Récupérer la liste des produits, etc.
}


?>
