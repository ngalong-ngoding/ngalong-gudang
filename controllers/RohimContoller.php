<?php
require_once "./models/rohim.php";



class RohimContoller
{   
    // 1. Membuat public fungcition
    public function index()
    {
        // 2. Membuat Variable Baru dengan = nama class yang di models
        $rohimModel = new Rohim();
        // 3. Membuat variable data dimana variable diatas dan di panggil fungsinya
        $data = $rohimModel->getDaftarBarang();
        include "./views/rohim.php";
    }
    public function store(){
        // 4. Untuk mengecek atau logic "ada yang post pake name submit gak"
        
        if (isset($_POST["submit"])){
            // 4.1. Ini logic buat namabah data
            header("Location: rohim");
            $rohim = new Rohim();
            // 4.2 ini nyimpen hasil ketika kita input
            $barang = $_POST["barang"];
            // 4.3 ini masukin input ke model (tambah barang)
            $rohim->tambahBarang($barang);
            // 4.4 Buat balik algi ke halaman awal
            
        }
    }
    // 5. Membuat fungsi untuk delete
    public function delete(){
        // 5.1 Membuat variable baru dengan nama class yang di models
        $rohim = new Rohim();
        // 5.2 Mengambil id dari Query
        $id = $_GET["id"] ?? null;
        if($id){
            // 5.3 Membuat fungsi delete
            $deleted = $rohim->hapusBarang($id);
            if($deleted){
                header("Location: rohim");
                exit;
            }else {
                echo "Barang tidak ditemukan";
            }
        }else {
            echo"ID tidak valid";
        }
    }
    // 6. Membuat fungsi edit
    public function edit(){
        // 6.1 Membuat variable baru dengan nama class yang di models
        $rohim = new Rohim();
        // 6.2 Mengambil id dari Query
        $id = $_GET["id"] ?? null;
        $newBarang = $_POST["barang"];
        if($id && $newBarang){
            // 6.3 Membuat fungsi edit
            $updated = $rohim->editBarang($id, $newBarang);
            if($updated){
                header("Location: rohim");
            }else {
                echo "Barang tidak ditemukan";
            }
        }else{
            echo "ID tidak valid";
        }
    }
}
?>