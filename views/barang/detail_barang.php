<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <?php include "./includes/bootstrap.php" ?>
    <base href="/ngalong-gudang/">
 
</head>
<body data-bs-theme="dark" class="bg-dark text-light">
        <div class="container-fluid">
        <div class="row g-2">
        <?php include "./includes/sidebar.php" ?>
        <div class="col-10 p-4">
            <div class="card bg-secondary text-light shadow-lg">
                <div class="card-header">
                    <h3 class="card-title mb-0">Detail Barang</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <img class="img-thumbnail me-4" 
                             src="<?php echo 'assets/images/' . htmlspecialchars($barang['foto_barang']); ?>" 
                             alt="Foto Barang" 
                             style="width: 250px; height: 250px; object-fit: cover;">
                        <div>
                            <p class="mb-2">
                                <strong>Jumlah:</strong> 
                                <span class="text-white"><?php echo htmlspecialchars($barang['jumlah']); ?></span>
                            </p>
                            <p class="mb-2">
                                <strong>Kategori:</strong> 
                                <span class="text-white"><?php echo htmlspecialchars($barang['kategori']); ?></span>
                            </p>
                            <p>
                                <strong>Deskripsi:</strong> 
                                <span><?php echo htmlspecialchars($barang['deskripsi']); ?></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



</body>

</html>
