
-- Ini ngebuat database (kalau belum ada)
CREATE DATABASE IF NOT EXISTS `ngalong_gudang` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ngalong_gudang`;

-- Ini ngebuat struktur table barang
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
    `id` int(11) NOT NULL,
    `nama_barang` varchar(255) NOT NULL,
    `jumlah` varchar(255) NOT NULL,
    `kategori` varchar(255) NOT NULL,
    `deskripsi` varchar(255) NOT NULL,
    `foto_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Buat kasih primary key ke id
ALTER TABLE `barang`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `barang`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;