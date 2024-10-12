<html>

<head>
    <title>Majid</title>
    <?php include "./includes/bootstrap.php" ?>
</head>

<body data-bs-theme="dark">
    <div class="container-fluid">
        <div class="row">
            <?php include "./includes/sidebar.php" ?>
            <div class="col-10 p-4">
                <p class="fs-1">Nama saya Majid</p>
                <p class="fs-3">Game kesukaan saya:</p>
                <div class="list-group mb-4">
                    <?php foreach ($majid->getAllGames() as $game): ?>
                        <li class="list-group-item">
                            <form method="POST" action=<?php echo "?route=majid/edit&id=$game[id]" ?> class="d-flex justify-content-between align-items-center mb-0">
                                <?php
                                echo isset($_GET["edit"]) && $_GET["edit"] == $game["id"] ? "<input name='game' class='w-25 form-control' placeholder='Masukan game yang ingin ditambah' value='$game[game]' />" : $game["game"]
                                ?>
                                <div>
                                    <?php echo "<a class='btn btn-danger' href='?route=majid/delete&id=$game[id]'>Delete</a>" ?>
                                    <?php echo isset($_GET["edit"]) && $_GET["edit"] == $game["id"] ? "<button class='btn btn-primary'>Save</button>" : "<a class='btn btn-primary' href='?edit=$game[id]'>Edit</a>" ?>
                                </div>
                            </form>
                        </li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <form method="POST" action="?route=majid/store" class="d-flex gap-1 justify-content-end">
                    <input name="game" class="w-25 form-control" placeholder="Masukan game yang ingin ditambah" />
                    <button type="submit" name="submit" class="btn btn-success">Tambah Game</button>
                </form>
            </div>
        </div>
</body>

</html>
