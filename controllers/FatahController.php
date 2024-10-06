<?php

require_once "./models/Fatah.php";

// Nah model tadi itu diimport disini buat ditampilin di views (fatah.php)

// controller ini nantinya digunain di index.php yang utama buat nentuin route nya

class FatahController
{
    public function index()
    {
        $fatah = new Fatah();
        // Ini code yang baru ditambahin, fungsinya buat nyiapin variable buat digunain di views/fatah.php
        $games = $fatah->getAllGames();
        include "./views/fatah.php";
    }

    public function store()
    {
        // Ini kayak ngasih logic (ada yang ngepost pake name submit gak?)
        if (isset($_POST["submit"])) {
            // Ini logic buat nambah data
            $fatah = new Fatah();
            // Ini nyimpen hasil ketikan kita di input yang <input name="game" />
            $game = $_POST["game"];
            // Ini masukin inputan ke model (tambahGame)
            $fatah->tambahGame($game);
            // Buat balik lagi ke hamalan awal
            header("Location: fatah");
        }
    }

    public function delete()
    {
        $fatah = new Fatah();
        // mengambil ID dari query
        $id = $_GET["id"] ?? null;

        if ($id) {
            $deleted = $fatah->hapusGame($id);
            if ($deleted) {
                header("Location: fatah");
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
        $fatah = new Fatah();
        $id = $_GET["id"] ?? null;
        $newGame = $_POST["game"];

        if ($id && $newGame) {
            $updated = $fatah->editGame($id, $newGame);
            if ($updated) {
                header("Location: fatah");
                exit;
            } else {
                echo "Game tidak ditemukan";
            }
        } else {
            echo "ID atau nama game tidak valid";
        }
    }
}
