<?php

require_once './modules/ModToutparcourir/cont_toutparcourir.php';

class ModToutparcourir {
    private $controleur;

    public function __construct(){
        $this->controleur = new ContToutparcourir();
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = "PageToutparcourir";
        }
        switch ($action) {
            case 'PageToutparcourir':
                $this->controleur->afficherPageToutparcourir();
                break;
        }

    }
}
