<html>
<head>
    <title>Azri</title>
    <?php include "./includes/bootstrap.php" ?>
    <style>
        .profile-img {
            position: absolute;
            top: 10px;
            right: 60px;
            width:80px;
            height:80px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 30px;

        }
    </style>
</head>

<body data-bs-theme="dark">
    <div class="container-fluid">
        <!-- Foto profil di pojok kanan atas -->
        <img src="https://tse4.mm.bing.net/th?id=OIP.auPwCpZST9CD73qVNFoLmgHaIn&pid=Api&P=0&h=180" alt="Profile" class="profile-img">

        <div class="row">
            <?php include "./includes/sidebar.php" ?>
            <div class="col-10 p-4">
                <p class="fs-1">Nama Gue Azri</p>
                <p class="fs-3">Game kesukaan Gue:</p>
                <div class="list-group mb-4">
                    <?php foreach ($azri->getAllGames() as $game): ?>
                        <li class="list-group-item">
                            <form method="POST" action=<?php echo "?route=azri/edit&id=$game[id]" ?> class="d-flex justify-content-between align-items-center mb-0">
                                <?php
                                echo isset($_GET["edit"]) && $_GET["edit"] == $game["id"] ? "<input name='game' class='w-25 form-control' placeholder='Masukan game yang ingin ditambah' value='$game[game]' />" : $game["game"]
                                ?>
                                <div>
                                    <?php echo "<a class='btn btn-danger' href='?route=azri/delete&id=$game[id]'>Delete</a>" ?>
                                    <?php echo isset($_GET["edit"]) && $_GET["edit"] == $game["id"] ? "<button class='btn btn-primary'>Save</button>" : "<a class='btn btn-primary' href='?edit=$game[id]'>Edit</a>" ?>
                                </div>
                            </form>
                        </li>
                    <?php endforeach ?>
                </div>
                <form method="POST" action="?route=azri/store" class="d-flex gap-1 justify-content-end">
                    <input name="game" class="w-25 form-control" placeholder="Masukan game yang ingin ditambah" />
                    <button type="submit" name="submit" class="btn btn-success">Tambah Game</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
