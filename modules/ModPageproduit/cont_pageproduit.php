<?php

require_once "Vue/vue_pageproduit.php";

class ContPageproduit
{
    private $vue;

    function __construct()
    {
        $this->vue = new VuePageproduit();
    }

    function afficherPageproduit()
    {
        $this->vue->pagePageproduit();
    }
}