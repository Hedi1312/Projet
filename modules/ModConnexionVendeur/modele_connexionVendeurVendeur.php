<?php

require_once "./Connexion.php";

class ModeleConnexionVendeur extends Connexion {

    public function connexion($login) {
        $requete= self::$bdd->prepare("SELECT * from vendeurs where email = :email;");
        $requete->bindParam('email',$login);
        $requete->execute();
        return $requete->fetch();
    }
}
