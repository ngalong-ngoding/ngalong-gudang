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
                
                <p class="fs-1">majidilharam_</p>
         <p class="fs-3">Hobi Saya:</p>
         <div class="list-group">
         <?php foreach ($data as $item): ?>
                       <li class="list-group-item"><?php echo $item["hobby"] ?></li>
                    <?php endforeach ?>

                <p class="fs-1">Pekerjaan Saya</p>
                <li class="list-group-item"><?php echo $item["kerjaan"] ?></li>

                <p class="fs-1">Alamat Rumah saya</p>
                <li class="list-group-item"><?php echo $item["alamatrumah"] ?></li>

         </ul>
         </div>
         </div>
         </div>

                
                
    
 
                    
    
    


</body>

</html>