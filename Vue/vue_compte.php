<?php

require_once "./Vue/Vue.php";
class VueCompte {

    function profil($data) {
        $data["titre"]="Mon Compte";
        Vue::render("Affichage/compte.php",$data);
    }


    function alerte_message($message,$alerte,$url) {
        Vue::alerte_message($message,$alerte,$url);
    }
}

?>