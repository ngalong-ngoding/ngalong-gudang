<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
    <?php include "./includes/bootstrap.php" ?>
</head>

<body data-bs-theme="dark">
    <div class="container-fluid">
        <div class="row g-2">
            <?php include "./includes/sidebar.php" ?>
            <div class="col-10 p-4">
                <div class="d-flex justify-content-between mb-4">
                    <h1>Daftar Barang (<?php echo $barang->rowCount(); ?>)</h1>
                    <div class="input-group mb-3 w-25">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-search"></i>
                        </span>
                        <input class="form-control" placeholder="Cari berdasarkan nama barang">
                    </div>
                </div>
                <div class="row g-4">
                    <?php
                    while ($row = $barang->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <a class="col-3" style="text-decoration: none;">
                            <div class="card" style="cursor:pointer;">
                                <img src="assets/images/<?php echo $row["foto_barang"]; ?>" class="card-img-top" alt=<?php echo $row["foto_barang"] ?>>
                                <div class="card-body p-0 pt-2">
                                    <span class="badge text-bg-primary" style="border-radius:0px 10px 10px 0px;"><?php echo $row["kategori"] ?></span>
                                    <div class="p-2">
                                        <h5 class="card-text"><?php echo $row["nama_barang"]; ?></h5>
                                        <p>Stok: <?php echo $row["jumlah"]; ?> pcs</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</body>

</html>