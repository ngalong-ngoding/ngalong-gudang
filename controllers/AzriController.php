<?php

require_once "./models/Azri.php";



class AzriController
{
    public function index()
    {
        $azri = new Azri();
        
        $games = $azri->getAllGames();
        include "./views/azri.php";
    }
    public function store()
    {
        
        if (isset($_POST["submit"])) {
            
            $azri = new Azri();
            $game = $_POST["game"];
            $azri->tambahGame($game);
            header("Location: azri");
        }
    }
    public function delete()
    {
        $azri = new Azri();
        $id = $_GET["id"] ?? null;
        if ($id) {
            $deleted = $azri->hapusGame($id);
            if ($deleted) {
                header("Location: azri");
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
        $azri = new Azri();
        $id = $_GET["id"] ?? null;
        $newGame = $_POST["game"];
        if ($id && $newGame) {
            $updated = $azri->editGame($id, $newGame);
            if ($updated) {
                header("Location: azri");
                exit;
            } else {
                echo "Game tidak ditemukan";
            }
        } else {
            echo "ID atau nama game tidak valid";
        }
    }
}