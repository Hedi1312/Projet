<?php

require_once "Vue/vue_toutparcourir.php";

class ContToutparcourir{
    private $vue;

    function __construct()
    {
        $this->vue = new VueToutparcourir();
    }

    function afficherPageToutparcourir()
    {
        $this->vue->pageToutparcourir();
    }
}