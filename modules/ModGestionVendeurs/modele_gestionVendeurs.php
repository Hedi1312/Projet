<?php

require_once "./Connexion.php";

class ModeleGestionVendeurs extends Connexion {

    public function ajoutVendeur($pseudo,$email,$nom,$img) {

        $requete= self::$bdd->prepare("INSERT INTO vendeurs (`pseudo`, `email`, `nom`, `img`) VALUES ( :pseudo, :email, :nom, :img);");
        $requete->bindParam('pseudo',$pseudo);
        $requete->bindParam('email',$email);
        $requete->bindParam('nom',$nom);
        $requete->bindParam('img',$img);

        $requete->execute();
    }

}
