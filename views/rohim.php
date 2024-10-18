<html>

<head>
    <title>ROHIM</title>
    <?php include "./includes/bootstrap.php" ?>
</head>

<body data-bs-theme="light">
    <!-- 1. Membuat sidebar -->
    <div class="container-fluid">
        <div class="row">
            <!-- 2. Memasukan dari file yang sudah dibuat -->
            <?php include "./includes/sidebar.php" ?>
            <div class="col-10 p-4">
                <p class="fs-1">Gudang PT. Ngalong Ngoding</p>
                <p class="fs-3">Daftar Barang:</p>
                <div class="list-group mb-4">
                    <!-- 3. Membuat luping atau foreach -->
                    <?php foreach ($data as $barang) : ?>


                        <li class="list-group-item">
                            <form method="POST" action=<?php echo "?route=rohim/edit&id=$barang[id]" ?> class="d-flex justify-content-between align-items-center mb-0">
                                <?php
                                echo isset($_GET["edit"]) && $_GET["edit"] == $barang["id"] ? "<input name='barang' class='w-25 form-control' placeholder='Masukan barang yang ingin ditambah' value='$barang[barang]' />" : $barang["barang"]
                                ?>
                                <div>
                                    <?php echo "<a class='btn btn-danger' href='?route=rohim/delete&id=$barang[id]'>Delete</a>" ?>
                                    <?php echo isset($_GET["edit"]) && $_GET["edit"] == $barang["id"] ? "<button class='btn btn-primary'>Save</button>" : "<a class='btn btn-primary' href='?edit=$barang[id]'>Edit</a>" ?>
                                </div>
                            </form>
                        </li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!-- 4. Membuat form untuk input data -->
                <form method="POST" action="?route=rohim/store" class="d-flex gap-1 justify-content-center">
                    <!-- 4.1. Untuk form variable-->
                    <input name="barang" class="w-25 form-control" placeholder="Masukan barang " />
                    <!-- 4.2 Membuat Tombol untuk menyimpan data -->
                    <button type="submit" name="submit" class="btn btn-success">Tambah Barang sss</button>
                </form>
            </div>

        </div>
</body>

</html>