<?php

// Coba pahamin code sederhana ini, intinya class disini itu kayak ngebuat fungsi yang nantinya kalau kita panggil bakal ngasih kita data (misalnya dari database)

// Misalnya kita panggil getAllData() maka nantinya kita akan ngehasilin data [["id" => 1, "hobby" => "Mancing"],...] semua data yang ada setelah kata return

// Ini digunain buat mulai session (semacam tempat menyimpan data sementara)
session_start();

class Fatah
{

    // Ini untuk ngebuat variable didalam model
    private $daftarGame = [];

    // Kalau gak salah construct ini supaya kita bisa edit edit variable diatas
    public function __construct()
    {
        // In buat kasih logic, kalau misalnya data di session ada maka ambilnya disitu kalau gk ada bikin baru
        if (isset($_SESSION["daftarGameFatah"])) {
            $this->daftarGame = $_SESSION["daftarGameFatah"];
        } else {
            $this->daftarGame = [
                ["id" => 1, "game" => "God of War: Ragnarok"],
                ["id" => 2, "game" => "Grand Theft Auto: V"],
                ["id" => 3, "game" => "A Way Out"],
            ];
        }
    }

    // Ini kayak fungsi untuk ambil semua list data
    public function getAllGames()
    {
        return $this->daftarGame;
    }

    // Ini fungsi untuk nambah ke daftar game
    public function tambahGame($game)
    {
        // count() fungsinya buat ambil berapa banyak data
        $newId = count($this->daftarGame) + 1;
        // Ini buat masukin game barang ke daftarGame
        $this->daftarGame[] = [
            "id" => $newId,
            "game" => $game
        ];
        // Sekaligus update penyimpanan di session tadi
        $_SESSION["daftarGameFatah"] = $this->daftarGame;
    }

    // Ini fungsi untuk hapus game dari daftarGame
    public function hapusGame($id)
    {
        foreach ($this->daftarGame as $key => $game) {
            if ($game["id"] == $id) {
                // Hapus game dari daftar
                unset($this->daftarGame[$key]);
                // Update variable yang diatas
                $this->daftarGame = array_values($this->daftarGame);
                $_SESSION["daftarGameFatah"] = $this->daftarGame;
                return true;
            }
        }
        return false;
    }

    // Ini fungsi untuk edit game
    public function editGame($id, $newGame)
    {
        foreach ($this->daftarGame as $key => $game) {
            if ($game["id"] == $id) {
                // update nama game
                $this->daftarGame[$key]["game"] = $newGame;
                // Update variable yang diatas
                $_SESSION["daftarGameFatah"] = $this->daftarGame;
                return true;
            }
        }
        return false;
    }
}
