<?php

require_once "./Connexion.php";

class ModeleInscription extends Connexion {
    
    public function inscription($nom,$prenom,$pseudo,$adresse1,$adresse2,$ville,$codepostal,$pays,$numero,$email,$mdp) {

        $requete= self::$bdd->prepare("INSERT INTO acheteurs (`nom`, `prenom`, `pseudo`, `adresse1`, `adresse2`, `ville`, `codepostal`, `pays`, `numero`, `email`, `mdp`) VALUES ( :nom, :prenom, :pseudo, :adresse1, :adresse2, :ville, :codepostal, :pays, :numero, :email, :mdp);");
        $requete->bindParam('nom',$nom);
        $requete->bindParam('prenom',$prenom);
        $requete->bindParam('pseudo',$pseudo);
        $requete->bindParam('adresse1',$adresse1);
        $requete->bindParam('adresse2',$adresse2);
        $requete->bindParam('ville',$ville);
        $requete->bindParam('codepostal',$codepostal);
        $requete->bindParam('pays',$pays);
        $requete->bindParam('numero',$numero);
        $requete->bindParam('email',$email);
        $requete->bindParam('mdp',$mdp);

        $requete->execute();
    }



}

?>
