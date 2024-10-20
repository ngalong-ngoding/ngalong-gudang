<?php

require_once "./config/db.php";
require_once "./models/Barang.php";

class BarangController
{
    private $barangModel;

    public function __construct()
    {
        // Membuat koneksi ke database
        $database = new Database();
        // print_r($database);
        $db = $database->getConnection();

        $this->barangModel = new Barang($db);
    }

    // Buat nampilin list semua barang
    public function index()
    {
        // print_r($this->barangModel);
        $barang = $this->barangModel->getAllBarang();

        include "./views/barang/list_barang.php";
    }
}
