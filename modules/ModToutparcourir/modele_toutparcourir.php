<?php

require_once "./toutparcourir.php";

class ModeleToutparcourir extends Toutparcourir {

    public function inscription($prenom,$nom,$age,$login,$password) {

        $requete=self::$bdd->prepare("INSERT INTO identifiants(`login`,`password`) VALUES (:login, :password);");
        $requete->bindParam('login',$login);
        $requete->bindParam('password',$password);
        $requete->execute();
        $login=self::$bdd->lastInsertId();



        $requete2= self::$bdd->prepare("INSERT INTO utilisateur (`prenom`, `nom`, `age`, `idLogin`) VALUES ( :prenom, :nom, :age, :login);");
        $requete2->bindParam('prenom',$prenom);
        $requete2->bindParam('nom',$nom);
        $requete2->bindParam('age',$age);
        $requete2->bindParam('login',$login);
        $requete2->execute();
    }

}

?>
