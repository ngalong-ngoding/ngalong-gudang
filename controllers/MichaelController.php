<?php

require_once "./models/Michael.php";


class MichaelController
{
    public function index()
    {
        $michael = new Michael();
        $games = $michael->getAllGames();
        include "./views/michael.php";
    }

    public function store()
    {
        if (isset($_POST["submit"])) {
            $michael = new Michael();
            $game = $_POST["game"];
            $michael->tambahGame($game);
            header("Location: michael");
        }
    }

    public function delete()
    {
        $michael = new Michael();
        $id = $_GET["id"] ?? null;
        if ($id) {
            $deleted = $michael->hapusGame($id);
            if ($deleted) {
                header("Location: michael");
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
        $michael = new Michael();
        $id = $_GET["id"] ?? null;
        $newGame = $_POST["game"];

        if ($id && $newGame) {
            $updated = $michael->editGame($id, $newGame);
            if ($updated) {
                header("Location: michael");
                exit;
            } else {
                echo "Game tidak ditemukan";
            }
        } else {
            echo "ID atau nama game tidak valid";
        }
    }
}
