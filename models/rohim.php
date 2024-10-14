<?php
class Rohim
{
    // 1. Membuat Variable terlebih dahulu
    private $daftarBarang = [];

    // 2. Membuat fungsi yang berisi kondisi jika ada data dari daftar barang maka data daftar barang yang akan terisi
    public function __construct()
    {
        // 2.1. isset = "ada data gak nih"  dari variable daftar barang rohim dmn daftar barang rohim tuh sama dengan daftarBarang 
        if (isset($_SESSION["daftarBarangRohim"])) 
        {
            
            $this->daftarBarang = $_SESSION["daftarBarangRohim"];
        } else {
            $this->daftarBarang = [
                ["id" => 1, "barang" => "Pepsodent"],
                ["id" => 2, "barang" => "CloseUp"],
                ["id" => 3, "barang" => "Kodomo"],
            ];
        }
    }
    // 3. Membuat Fungsi Agar bisa dipanggil oleh views agar bisa dipanggil oleh seluruh kontruksi
    public function getDaftarBarang(){
        return $this->daftarBarang;
    }
    // 4. Membuat fungsi untuk menambah daftar barang
    public function tambahBarang($barang){
        // 4.1. Mewmbuat variable baru dengan fungsi menambah panjang data dari daftar barang
        $newId = count($this->daftarBarang) + 1;
        // 4.2. ini Array lohi isinya yang dibawah ini ya
        $this->daftarBarang[] = [
            "id" => $newId,
            "barang" => $barang
        ];
        // 4.3. Sekalina ini seison store tadi
        $_SESSION["daftarBarangRohim"] = $this->daftarBarang;
    }
    // 5 Membuat fungsi untuk menghapus daftar barang
    public function hapusBarang($id){
        // 5.1. Membuat variable baru dengan fungsi menghapus data dari data
        // 5.2. Membuat looping untuk mencari id sama sama yang dimiliki
        foreach($this->daftarBarang as $key => $barang){
            if($barang["id"] == $id){
                // 5.3. Fungsi hapus game dari dafter
                unset($this->daftarBarang[$key]);
                // 5.4. Update variable yang di atas
                $this->daftarBarang = array_values($this->daftarBarang);
                $_SESSION["daftarBarangRohim"] = $this->daftarBarang;
                return true;
            }
        }
    }
    // 6. Membuat fungsi untuk edit barang
    public function editBarang($id, $newBarang){
        foreach ($this->daftarBarang as $key => $barang){
            if ($barang["id"] == $id) {
                // 6.1 Update nama gamenya
                $this->daftarBarang[$key]["barang"] = $newBarang;
                // 6.2 Update variable di atas
                $_SESSION["daftarBarangRohim"] = $this->daftarBarang;
            return true;
            }
        }
    }
}
?>