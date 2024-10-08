<?php

// dihalaman ini itu digunain semacam untuk pintu masuk utamanya (route)

require_once "./controllers/FatahController.php";
require_once "./controllers/RohimContoller.php";
require_once "./controllers/MajidController.php";

$fatahController = new FatahController();
$rohimController = new RohimContoller();
$MajidController = new MajidController();

$routes = [
    "fatah" => [$fatahController, "index"],
    "rohim" => [$rohimController, "index"],
    "fatah/store" => [$fatahController, "store"],
    "fatah/delete" => [$fatahController, "delete"],
    "fatah/edit" => [$fatahController, "edit"],
    "majid" => [$MajidController, "index"],
    // nanti kalau mau ditambahin berarti
    // "routenya" => [$namaController, "index"];
];

// Ini buat ngambil route yang ada di url kita, misalnya localhost/ngalong-gudang/index.php?route=fatah
// berarti yang diambil sama GET["route"] = "fatah" nya
$action = $_GET["route"] ?? header("Location: fatah");;
$action = $_GET["route"] ?? header("Location: rohim");;

// Ini buat ngecek si variabel $action itu beneran ada gak di $routes
if (array_key_exists($action, $routes)) {
    call_user_func($routes[$action]);
} else {
    echo "Route tidak ditemukan";
}
