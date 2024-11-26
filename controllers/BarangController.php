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

        $barang = $this->barangModel->getAllBarang($search);
        $banyakBarang = count($barang);

        include "./views/barang/list_barang.php";
    }

    public function detail()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : "";

       $barang = $this->barangModel->getBarangById($id);

        include "./views/barang/detail_barang.php";
    }

    public function store()
    {
        // 1. Membuat Kondisi terlebih dahulu
        // Untuk membuat itulah
        // $_SERVER["REQUEST_METHOD"] == "POST"
        if (isset($_POST["tambah"])) {
            // echo "data ok";
            $nama_barang = $_POST["nama_barang"];
            $jumlah = $_POST["jumlah"];
            $kategori = $_POST["kategori"];
            $deskripsi = $_POST["deskripsi"];

            // 2. Mesasukan data baru kedalam database atau bisa disebut dengan variable
            $this->barangModel->addBarang($nama_barang, $jumlah, $kategori, $deskripsi);
            // 3. Redirect ke halaman index
            header("Location: ?cotroller=barang&action=index");
        } else
            include "./views/barang/tambah_barang.php";
    }
}
