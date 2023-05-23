<?php

require_once "./Connexion.php";

class ModeleInscription extends Connexion {
    
    public function inscription($pseudo,$login,$nom) {

        $requete= self::$bdd->prepare("INSERT INTO vendeurs (`pseudo`, `email`, `nom`) VALUES ( :pseudo, :email, :nom);");
        $requete->bindParam('pseudo',$pseudo);
        $requete->bindParam('email',$login);
        $requete->bindParam('nom',$nom);
        $requete->execute();
    }


}

?>
