<?php

require_once './modules/ModPageproduit/cont_pageproduit.php';

class ModPageproduit {
    private $controleur;

    public function __construct(){
        $this->controleur = new ContPageproduit();
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = "PagePageproduit";
        }
        switch ($action) {
            case 'PagePageproduit':
                $this->controleur->afficherPageproduit();
                break;
        }

    }
}
