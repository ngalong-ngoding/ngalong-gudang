<html>

<head>
    <title>Majid</title>
    <?php include "./includes/tailwind.php" ?>
</head>
<style>
        .sidebar {
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body>
    <?php include "./includes/sidebar2.php" ?>
    <div class= "bg-sky-200 min-h-screen p-4">
    <div class="list-group mb-4 space-y-2">
  <?php foreach ($majid->getAllGames() as $game): ?>
    <div class="bg-gray-200 border rounded-md shadow-sm">
      <form method="POST" action="<?php echo "?route=majid/edit&id=$game[id]" ?>" class="flex justify-between items-center p-4">
        <?php
          echo isset($_GET["edit"]) && $_GET["edit"] == $game["id"]
            ? "<input name='game' class='w-1/4 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500' placeholder='Masukan game yang ingin ditambah' value='$game[game]' />"
            : "<span class='text-gray-700'>$game[game]</span>";
        ?>
        <div class="flex gap-2">
          <?php echo "<a class='bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition' href='?route=majid/delete&id=$game[id]'>Delete</a>" ?>
          <?php echo isset($_GET["edit"]) && $_GET["edit"] == $game["id"]
            ? "<button class='bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 transition'>Save</button>"
            : "<a class='bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 transition' href='?edit=$game[id]'>Edit</a>";
          ?>
        </div>
      </form>
  </div>
  <?php endforeach ?>
</div>

<form method="POST" action="?route=majid/store" class="flex gap-2 justify-end mt-4">
  <input name="game" class="w-1/4 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukan game yang ingin ditambah" />
  <button type="submit" name="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition">Tambah Game</button>
</form>

                    
    
</body>

</html>
