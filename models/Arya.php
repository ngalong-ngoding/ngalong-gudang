<?php

session_start();
class Arya
{
    private $daftarPajak = [];

    public function __construct()
    {
        if (isset($_SESSION["daftarPajak"])) {
            $this->daftarPajak = $_SESSION["daftarPajak"];
        } else {
            $this->daftarPajak = [
                ["id" => 1, "orang" =>  "udin","username"=> "ngakngak"],
                ["id" => 2, "orang" =>  "agus","username"=> "bengong"],
                ["id" => 3, "orang" =>  "asep","username"=> "sebat"],
            ];
        }
    }

    public function getAllPajak()
    {
        return $this->daftarPajak;
    }
}

