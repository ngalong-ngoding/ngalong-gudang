<?php

require_once "./models/Arya.php";

class AryaController
{
    public function index()
    {
        $arya = new Arya();
        $pajak = $arya->getAllPajak();
        include "./views/arya.php";
    }
}