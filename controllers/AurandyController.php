<?php

require_once "./models/Aurandy.php";

class AurandyController
{
    public function index()
    {
        // Inisialisasi model
        $dani = new Aurandy();
        
        // Mengambil semua game
        $games = $dani->getAllGames();

        // Memuat view dan mengirimkan data game
        include "./views/aurandy.php";
    }

    public function store()
    {
        // Cek apakah form di-submit
        if (isset($_POST["submit"])) {
            
            $dani = new Aurandy();
            $game = $_POST["game"];
            
            // Tambah game baru
            $dani->tambahGame($game);
            
            // Redirect ke halaman utama
            header("Location: ?route=aurandy");
        }
    }

    public function delete()
    {
        // Inisialisasi model
        $dani = new Aurandy();
        $id = $_GET["id"] ?? null;
        
        // Hapus game jika ID valid
        if ($id) {
            $deleted = $dani->hapusGame($id);  // Ganti $aurandy dengan $dani
            if ($deleted) {
                header("Location: ?route=aurandy");
                exit;
            } else {
                echo "Game tidak ditemukan.";
            }
        } else {
            echo "ID tidak valid.";
        }
    }

    public function edit()
    {
        // Inisialisasi model
        $dani = new Aurandy();
        $id = $_GET["id"] ?? null;
        $newGame = $_POST["game"] ?? null;  // Pastikan nama game ada
        
        // Update game jika ID dan nama game valid
        if ($id && $newGame) {
            $updated = $dani->editGame($id, $newGame);  // Ganti $aurandy dengan $dani
            if ($updated) {
                header("Location: ?route=aurandy");
                exit;
            } else {
                echo "Game tidak ditemukan.";
            }
        } else {
            echo "ID atau nama game tidak valid.";
        }
    }
}
