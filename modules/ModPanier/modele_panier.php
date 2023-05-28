<?php

require_once "./Connexion.php";

class ModelePanier extends Connexion {

//    public function getPanier() {
//        $requete= self::$bdd->prepare("SELECT * FROM articles INNER JOIN panier ON articles.idArticle=panier.idArticle where idAcheteur IN (SELECT idAcheteur from acheteurs where email = :email);");
//        $requete->bindParam('email',$_SESSION['acheteur']);
//        $requete->execute();
//        return $requete->fetchAll();
//    }

}

?>