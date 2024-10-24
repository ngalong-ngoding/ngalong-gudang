<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "./includes/bootstrap.php" ?>
    <base href="/ngalong-gudang/">
</head>

<body data-bs-theme="dark">
    <div class="container-fluid">
        <div class="row g-2">
            <?php include "./includes/sidebar.php" ?>
            <div class="col-10">
                <?php echo $barang["jumlah"] ?>
                <?php echo $barang["kategori"] ?>
                <?php echo $barang["deskripsi"] ?>
                <img width="250" height="250" src=<?php echo "assets/images/$barang[foto_barang]" ?>>
            </div>
        </div>
    </div>
</body>

</html>