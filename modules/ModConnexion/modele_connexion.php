<?php

require_once "./Connexion.php";

class ModeleConnexion extends Connexion {

    public function connexionAcheteur($email) {
        $requete= self::$bdd->prepare("SELECT * from acheteurs where email = :email;");
        $requete->bindParam('email',$email);
        $requete->execute();
        return $requete->fetch();
    }

    public function connexionVendeur($email) {
        $requete= self::$bdd->prepare("SELECT * from vendeurs where email = :email;");
        $requete->bindParam('email',$email);
        $requete->execute();
        return $requete->fetch();
    }

    public function connexionAdmin($pseudo) {
        $requete= self::$bdd->prepare("SELECT * from admins where pseudo = :pseudo;");
        $requete->bindParam('pseudo',$pseudo);
        $requete->execute();
        return $requete->fetch();
    }
}
