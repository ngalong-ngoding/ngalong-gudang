<?php

// Coba pahamin code sederhana ini, intinya class disini itu kayak ngebuat fungsi yang nantinya kalau kita panggil bakal ngasih kita data (misalnya dari database)

// Misalnya kita panggil getAllData() maka nantinya kita akan ngehasilin data [["id" => 1, "hobby" => "Mancing"],...] semua data yang ada setelah kata return

class Fatah
{
    // Ini kayak fungsi untuk ambil semua list data
    public function getAllData()
    {
        return [
            ["id" => 1, "hobby" => "Mancing"],
            ["id" => 2, "hobby" => "Ngoding"] // gak cuman id sama hobby, kalau mau ditambah yang lain juga gak masalah (ini contoh cuman 2)
        ];
    }

    // Ini kalau mau nambahin fungsi baru lagi (buat contoh) -> coba cek di controllers/FatahController.php (ada perubahan code)
    public function getAllGames()
    {
        return [
            ["id" => 11, "game" => "God of War: Ragnarok"],
            ["id" => 22, "game" => "Grand Theft Auto: V"],
            ["id" => 33, "game" => "A Way Out"],
        ];
    }
}
