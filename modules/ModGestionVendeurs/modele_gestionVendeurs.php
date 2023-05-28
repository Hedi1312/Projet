<?php

require_once "./Connexion.php";

class ModeleGestionVendeurs extends Connexion {

    public function ajoutVendeur($pseudo,$email,$nom,$img) {
        $requete= self::$bdd->prepare("INSERT INTO vendeurs (`pseudo`, `email`, `nom`, `img`, `idAdmin`) VALUES ( :pseudo, :email, :nom, :img,(SELECT idAdmin from admins where admins.email = :email2));");
        $requete->bindParam('pseudo',$pseudo);
        $requete->bindParam('email',$email);
        $requete->bindParam('nom',$nom);
        $requete->bindParam('img',$img);
        $requete->bindParam('email2',$_SESSION['admin']);

        $requete->execute();
    }

    public function getListeVendeur(){
        $requete= self::$bdd->prepare("SELECT * from vendeurs where idAdmin IN (SELECT idAdmin from admins where email = :email);");
        $requete->bindParam('email',$_SESSION['admin']);
        $requete->execute();
        return $requete->fetchAll();
    }

    public function supprimerVendeur($idVendeur){
        $requete= self::$bdd->prepare("DELETE FROM articles where idVendeur= :idVendeur;");
        $requete->bindParam('idVendeur',$idVendeur);
        $requete->execute();

        $requete= self::$bdd->prepare("DELETE FROM vendeurs where idVendeur= :idVendeur;");
        $requete->bindParam('idVendeur',$idVendeur);
        $requete->execute();
    }

}
