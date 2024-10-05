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
                <div class="list-group mb-4">
                    <!-- Kalau kalian inget, ini tuh kayak looping while di code yang crud php sebelumnya -->
                    <?php foreach ($data as $item): ?>
                        <li class="list-group-item"><?php echo $item["hobby"] ?></li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!-- Ini buat ngelooping yang $games tadi -->
                <p class="fs-3">Game kesukaan saya:</p>
                <div class="list-group">
                    <!-- Intinya ini buat ngelooping $games nya -->
                    <!-- dibagian $games as $game ($games namanya harus sama kayak di controller tadi) kalau ($game nya ini bebas namanya apa aja) -->
                    <?php foreach ($gamess as $game): ?>
                        <!-- trus liat dibagian echo $game["game" ("game" ini harus sama kayak di model tadi key nya)] -->
                        <li class="list-group-item"><?php echo $game["game"] ?></li>
                    <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
</body>

</html>