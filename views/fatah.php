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
                <p class="fs-3">Game kesukaan saya:</p>
                <div class="list-group mb-4">
                    <!-- Intinya ini buat ngelooping $games nya -->
                    <!-- dibagian $games as $game ($games namanya harus sama kayak di controller tadi) kalau ($game nya ini bebas namanya apa aja) -->
                    <?php foreach ($fatah->getAllGames() as $game): ?>
                        <!-- trus liat dibagian echo $game["game" ("game" ini harus sama kayak di model tadi key nya)] -->
                        <li class="list-group-item"><?php echo $gamess["game"] ?></li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <form method="POST" action="?route=fatah/store" class="d-flex gap-1 justify-content-end">
                    <input name="game" class="w-25 form-control" placeholder="Masukan game yang ingin ditambah" />
                    <button type="submit" name="submit" class="btn btn-success">Tambah Game</button>
                </form>
            </div>
        </div>
</body>

</html>