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
        // print_r($this->barangModel);
        if (!empty($search)) {
            // nanti ini diganti getAllBarang by query param
            $barang = $this->barangModel->getAllBarang();
        } else {
            $barang = $this->barangModel->getAllBarang();
        }

        include "./views/barang/list_barang.php";
    }
}
