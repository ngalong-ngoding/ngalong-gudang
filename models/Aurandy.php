<?php

class Aurandy
{
    // Array untuk menyimpan daftar game
    private $daftarGameAurandy = [];

    public function __construct()
    {
        // Memulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Memeriksa apakah daftar game sudah ada di session
        if (isset($_SESSION["daftarGameAurandy"])) {
            $this->daftarGameAurandy = $_SESSION["daftarGameAurandy"];
        } else {
            // Inisialisasi daftar game kosong jika tidak ada di session
            $this->daftarGameAurandy = [];
        }
    }

    // Mengambil semua game
    public function getAllGames()
    {
        return $this->daftarGameAurandy;
    }

    // Menambah game baru ke daftar
    public function tambahGame($game)
    {
        if (empty($game)) {
            // Validasi: tidak boleh menambahkan game kosong
            return false;
        }

        // Menghitung ID baru berdasarkan ID terakhir
        $lastGame = end($this->daftarGameAurandy);
        $newId = $lastGame ? $lastGame['id'] + 1 : 1;  // Jika daftar kosong, ID dimulai dari 1

        // Menambahkan game ke daftar
        $this->daftarGameAurandy[] = [
            "id" => $newId,
            "game" => $game
        ];

        // Simpan daftar game ke session
        $_SESSION["daftarGameAurandy"] = $this->daftarGameAurandy;

        return true;
    }

    // Menghapus game berdasarkan ID
    public function hapusGame($id)
    {
        foreach ($this->daftarGameAurandy as $key => $game) {
            if ($game["id"] == $id) {
                // Menghapus game dari array
                unset($this->daftarGameAurandy[$key]);

                // Reindex array untuk menjaga konsistensi
                $this->daftarGameAurandy = array_values($this->daftarGameAurandy);

                // Simpan perubahan ke session
                $_SESSION["daftarGameAurandy"] = $this->daftarGameAurandy;

                return true;
            }
        }
        return false; // ID tidak ditemukan
    }

    // Mengedit nama game berdasarkan ID
    public function editGame($id, $newGame)
    {
        if (empty($newGame)) {
            // Validasi: nama game tidak boleh kosong
            return false;
        }

        foreach ($this->daftarGameAurandy as $key => $game) {
            if ($game["id"] == $id) {
                // Mengubah nama game
                $this->daftarGameAurandy[$key]["game"] = $newGame;

                // Simpan perubahan ke session
                $_SESSION["daftarGameAurandy"] = $this->daftarGameAurandy;

                return true;
            }
        }
        return false; // ID tidak ditemukan
    }
}
