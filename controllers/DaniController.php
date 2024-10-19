<?php

require_once "./models/Dani.php";



class DaniController
{
    public function index()
    {
        $dani = new Dani();
        
        $games = $dani->getAllGames();
        include "./views/dani.php";
    }
    public function store()
    {
        
        if (isset($_POST["submit"])) {
            
            $dani = new Dani();
            $game = $_POST["game"];
            $dani->tambahGame($game);
            header("Location: dani");
        }
    }
    public function delete()
    {
        $dani = new Dani();
        $id = $_GET["id"] ?? null;
        if ($id) {
            $deleted = $dani->hapusGame($id);
            if ($deleted) {
                header("Location: dani");
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
        $dani = new Dani();
        $id = $_GET["id"] ?? null;
        $newGame = $_POST["game"];
        if ($id && $newGame) {
            $updated = $dani->editGame($id, $newGame);
            if ($updated) {
                header("Location: dani");
                exit;
            } else {
                echo "Game tidak ditemukan";
            }
        } else {
            echo "ID atau nama game tidak valid";
        }
    }
}