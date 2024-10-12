<?php

require_once "./models/Majid.php";



class MajidController
{
    public function index()
    {
        $majid = new Majid();
        
        $games = $majid->getAllGames();
        include "./views/majid.php";
    }
    public function store()
    {
        
        if (isset($_POST["submit"])) {
            
            $majid = new Majid();
            $game = $_POST["game"];
            $majid->tambahGame($game);
            header("Location: majid");
        }
    }
    public function delete()
    {
        $majid = new Majid();
        $id = $_GET["id"] ?? null;
        if ($id) {
            $deleted = $majid->hapusGame($id);
            if ($deleted) {
                header("Location: majid");
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
        $majid = new Majid();
        $id = $_GET["id"] ?? null;
        $newGame = $_POST["game"];
        if ($id && $newGame) {
            $updated = $majid->editGame($id, $newGame);
            if ($updated) {
                header("Location: majid");
                exit;
            } else {
                echo "Game tidak ditemukan";
            }
        } else {
            echo "ID atau nama game tidak valid";
        }
    }
}