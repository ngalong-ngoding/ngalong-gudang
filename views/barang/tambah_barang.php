<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/ngalong-gudang/">
    <title>Barang</title>
    <?php include "./includes/bootstrap.php" ?>
</head>

<body data-bs-theme="light">
    <div class="container-fluid">
        <div class="row g-2">
            <?php include "./includes/sidebar.php" ?>
            <div class="col-10 p-4">
                <div class="d-flex justify-content-between mb-8">
                    <h1>Tambah Barang </h1><br>
                    <br>
                    <!-- 1. Bikin  Form bserta actionya dan methodenya apa-->
                    <form action="barang/create" method="POST">
                        <div class="row g-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Nama Barang</label>
                                <input class="form-control" type="text" placeholder="Masukan Nama Barang" name="nama_barang" require>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">jumlah</label>
                                <input class="form-control" type="text" placeholder="Masukan Jumlah" name="jumlah" require>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kategori</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="kategori" require>
                                    <option>Pilih Kategori</option>
                                    <option>Kecantikan</option>
                                    <option>Makanan</option>
                                    <option>Hobi</option>
                                    <option>Life Sytle</option>
                                    <option>Anak</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Input Deskripsi" name="deskripsi" require></textarea>
                            </div>
                        </div>
                        </br>
                        <button type="submit" name="tambah" >Tambah Barang</button>

                    </form>

                </div>
            </div>

        </div>
</body>

</html>