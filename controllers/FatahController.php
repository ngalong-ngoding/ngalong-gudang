<?php

require_once "./models/Fatah.php";

// Nah model tadi itu diimport disini buat ditampilin di views (fatah.php)

// controller ini nantinya digunain di index.php yang utama buat nentuin route nya

class FatahController
{
    public function index()
    {
        $fatahModel = new Fatah();
        $data = $fatahModel->getAllData();
        include "./views/fatah.php";
    }
}
