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
        $search = isset($_GET["search"]) ? $_GET["search"] : "";

        // Ini kondisi buat melakukan pencarian
        $barang = $this->barangModel->getAllBarang($search);

        include "./views/barang/list_barang.php";
    }
}
