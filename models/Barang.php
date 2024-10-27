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
    public function addBarang($nama_barang,  $jumlah, $kategori, $deskripsi){
        // 1. Membuat Query untuk inser kedalam database
        $query = "INSERT INTO " . $this->nama_table . " (nama_barang, jumlah, kategori,  deskripsi) VALUES (:nama_barang, :jumlah, :kategori,  :deskripsi)";

        // 2. Membuat prepare statement
        $stmt = $this->conn->prepare($query);
        // 3. Membuat konek
        // 4. Inilisasi untuk variable PDO
        $stmt->bindParam(':nama_barang', $nama_barang);
        $stmt->bindParam(':jumlah', $jumlah);
        $stmt->bindParam(':kategori', $kategori);
       
        $stmt->bindParam(':deskripsi', $deskripsi);

        if($stmt->execute()){
            return true;
        }else {
            print_r($stmt->errorInfo());
            return false;
            
        }
        
    }
}
