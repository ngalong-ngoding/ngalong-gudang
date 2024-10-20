<?php

class Barang
{
    private $conn;
    private $nama_table = "barang";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAllBarang()
    {
        // Ini query ke sql (db)
        $query = "SELECT * FROM " . $this->nama_table;

        // Ini ngejalanin query diatas via conn yang ada di config/db.php
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
