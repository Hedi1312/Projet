<?php

require_once "./Connexion.php";

class ModeleCompte extends Connexion {

    function getProfilAcheteur($email){
        $requete= self::$bdd->prepare("SELECT * from acheteurs where email = :email;");
        $requete->bindParam('email',$email);
        $requete->execute();
        return $requete->fetch();
    }

    function getProfilAdmin($email){
        $requete= self::$bdd->prepare("SELECT * from admins where email = :email;");
        $requete->bindParam('email',$email);
        $requete->execute();
        return $requete->fetch();
    }

    function getProfilVendeur($email){
        $requete= self::$bdd->prepare("SELECT * from vendeurs where email = :email;");
        $requete->bindParam('email',$email);
        $requete->execute();
        return $requete->fetch();
    }

    function supprimerLeProfil($email){
        $requete= self::$bdd->prepare("DELETE FROM vendeurs where idVendeur IN (SELECT idVendeur from vendeurs where email = :email);");
        $requete->bindParam('email',$email);
        $requete->execute();

    }

}
