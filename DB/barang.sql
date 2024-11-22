
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

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `jumlah`, `kategori`, `deskripsi`, `foto_barang`) VALUES
(27, 'Kodomo', '2', 'kecantikan', 'Produk ini adalah produk yang bagus', 'kodomo.jpg'),
(28, 'Makanan Ikan', '10', 'Makanan', 'Makanan ikan enak tau', 'makanan-ikan.png'),
(29, 'Keyboard', '1', 'Komputer', 'Keyboard yummy yummy', 'keyboard.jpeg'),
(30, 'Monitor', '2', 'Komputer', 'Monitor Viewsonic', 'monitor.webp'),
(31, 'Ikan cupang', '10', 'Hewan', 'Ikan laga-laga', 'cupang.jpg'),
(32, 'Laptop', '1', 'Komputer', 'Laptop eroji', 'laptop.webp'),
(33, 'Speaker', '1', 'Komputer', 'Speaker jedag jedug', 'speaker.jpg');

-- Buat kasih primary key ke id
ALTER TABLE `barang`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `barang`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;