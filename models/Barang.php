<?php

class Barang
{
    private $conn;
    private $nama_table = "barang";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAllBarang($searchQuery = "")
    {
        if ($searchQuery) {
            $query = "SELECT * FROM " . $this->nama_table . " WHERE nama_barang LIKE :searchQuery";
            // Ngejalanin query yang ada diatasnya
            $stmt = $this->conn->prepare($query);
            $stmt->execute(["searchQuery" => "%" . $searchQuery . "%"]);
        } else {
            // Ini query ke sql (db) tanpa kondisi
            $query = "SELECT * FROM " . $this->nama_table;
            $stmt = $this->conn->query($query);
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
