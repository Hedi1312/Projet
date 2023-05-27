<?php

class Connexion {
    protected static $bdd=NULL;

    public function __construct () {
    }

    public static function initConnexion() {
        try {

            $dns="mysql:host=localhost:3306;dbname=site_efrei";
            $user="root";
            self::$bdd = new PDO($dns,$user);

            self::$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>