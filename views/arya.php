<html>

<head>
    <title>Arya</title>
    <?php include "./includes/bootstrap.php" ?>
</head>

</html>


<body data-bs-theme="dark">
    <div class="container-fluid">
        <div class="row">
            <?php include "./includes/sidebar.php" ?>
            <div class="col-10 p-4">
                <p class="fs-1">Nama saya Arya</p>
                <p class="fs-3">Pajak saya:</p>
                <table class="table caption-top">
                    <caption>Daftar Pajak</caption>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Orang</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($arya->getAllPajak() as $orang): ?>
                        <tr>
                            <td><?php echo $orang["id"]?></td>
                            <td><?php echo $orang["username"]?></td>
                            <td><?php echo $orang["orang"]?></td>
                            <td>
                                <a href="abc" class="btn btn-primary">edit</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <div class="list-group mb-4">

                </div>

            </div>
        </div>
</body>