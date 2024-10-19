<?php

require_once "./models/Aurandy.php";



class AurandyController
{
    public function index()
    {
        $aurandy = new Aurandy();
        
        $games = $aurandy->getAllGames();
        include "./views/aurandy.php";
    }
    public function store()
    {
        
        if (isset($_POST["submit"])) {
            
            $aurandy = new Aurandy();
            $game = $_POST["game"];
            $aurandy->tambahGame($game);
            header("Location: aurandy");
        }
    }
    public function delete()
    {
        $aurandy = new Aurandy();
        $id = $_GET["id"] ?? null;
        if ($id) {
            $deleted = $aurandy->hapusGame($id);
            if ($deleted) {
                header("Location: aurandy");
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
        $aurandy = new Aurandy();
        $id = $_GET["id"] ?? null;
        $newGame = $_POST["game"];
        if ($id && $newGame) {
            $updated = $aurandy->editGame($id, $newGame);
            if ($updated) {
                header("Location: aurandy");
                exit;
            } else {
                echo "Game tidak ditemukan";
            }
        } else {
            echo "ID atau nama game tidak valid";
        }
    }
}