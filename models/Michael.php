<?php

class Michael
{
    // Array untuk menyimpan daftar game
    private $daftarGameMichael = [];

    public function __construct()
    {
        // Memulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Memeriksa apakah daftar game sudah ada di session
        if (isset($_SESSION["daftarGameMichael"])) {
            $this->daftarGameMichael = $_SESSION["daftarGameMichael"];
        } else {
            // Inisialisasi daftar game kosong jika tidak ada di session
            $this->daftarGameMichael = [];
        }
    }

    // Mengambil semua game
    public function getAllGames()
    {
        return $this->daftarGameMichael;
    }

    // Menambah game baru ke daftar
    public function tambahGame($game)
    {
        if (empty($game)) {
            // Validasi: tidak boleh menambahkan game kosong
            return false;
        }

        // Menghitung ID baru berdasarkan ID terakhir
        $lastGame = end($this->daftarGameMichael);
        $newId = $lastGame ? $lastGame['id'] + 1 : 1;  // Jika daftar kosong, ID dimulai dari 1

        // Menambahkan game ke daftar
        $this->daftarGameMichael[] = [
            "id" => $newId,
            "game" => $game
        ];

        // Simpan daftar game ke session
        $_SESSION["daftarGameMichael"] = $this->daftarGameMichael;

        return true;
    }

    // Menghapus game berdasarkan ID
    public function hapusGame($id)
    {
        foreach ($this->daftarGameMichael as $key => $game) {
            if ($game["id"] == $id) {
                // Menghapus game dari array
                unset($this->daftarGameMichael[$key]);

                // Reindex array untuk menjaga konsistensi
                $this->daftarGameMichael = array_values($this->daftarGameMichael);

                // Simpan perubahan ke session
                $_SESSION["daftarGameMichael"] = $this->daftarGameMichael;

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

        foreach ($this->daftarGameMichael as $key => $game) {
            if ($game["id"] == $id) {
                // Mengubah nama game
                $this->daftarGameMichael[$key]["game"] = $newGame;

                // Simpan perubahan ke session
                $_SESSION["daftarGameMichael"] = $this->daftarGameMichael;

                return true;
            }
        }
        return false; // ID tidak ditemukan
    }
}
