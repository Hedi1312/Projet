<?php

require_once "./Connexion.php";

class ModeleArticle extends Connexion {




    public function getListeArticles(){
        $requete= self::$bdd->prepare("SELECT * from articles where idVendeur IN (SELECT idVendeur from vendeurs where email = :email);");
        $requete->bindParam('email',$_SESSION['vendeur']);
        $requete->execute();
        return $requete->fetchAll();
    }

    public function ajoutArticle($numeroIdentification, $nom, $description, string $destination1, string $destination2, string $destination3, $video, $categorie, $prix){
        $requete= self::$bdd->prepare("INSERT INTO articles (`numeroIdentification`, `nomProduit`, `description`, `photo1`, `photo2`, `photo3`, `video`, `categorie`, `prix`, `idVendeur`) VALUES ( :numeroIdentification, :nom, :description, :photo1,:photo2,:photo3,:video,:categorie,:prix,(SELECT idVendeur from vendeurs where email = :email));");
        $requete->bindParam('numeroIdentification',$numeroIdentification);
        $requete->bindParam('nom',$nom);
        $requete->bindParam('description',$description);
        $requete->bindParam('photo1',$destination1);
        $requete->bindParam('photo2',$destination2);
        $requete->bindParam('photo3',$destination3);
        $requete->bindParam('video',$video);
        $requete->bindParam('categorie',$categorie);
        $requete->bindParam('prix',$prix);
        $requete->bindParam('email',$_SESSION['vendeur']);

        $requete->execute();
    }

    public function supprimerArticle($idArticle){
        $requete= self::$bdd->prepare("DELETE FROM articles where idArticle=:idArticle;");
        $requete->bindParam('idArticle',$idArticle);
        $requete->execute();
    }



}