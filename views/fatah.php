<html>

<head>
    <title>Fatah</title>
    <?php include "./includes/bootstrap.php" ?>
</head>

<body data-bs-theme="dark">
    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <!-- Ini kayak masukin template yang udah gw buatin di folder includes -->
            <?php include "./includes/sidebar.php" ?>
            <div class="col-10 p-4">
                <p class="fs-1">Nama saya Fatah</p>
                <p class="fs-3">Hobi saya:</p>
                <div class="list-group">
                    <!-- Kalau kalian inget, ini tuh kayak looping while di code yang crud php sebelumnya -->
                    <?php foreach ($data as $item): ?>
                        <li class="list-group-item"><?php echo $item["hobby"] ?></li>
                    <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
</body>

</html>