<?php

require_once "./controllers/BarangController.php";

require_once "./controllers/FatahController.php";
require_once "./controllers/RohimContoller.php";
require_once "./controllers/MajidController.php";
require_once "./controllers/AzriController.php";
require_once "./controllers/MichaelController.php";
require_once "./controllers/DaniController.php";
require_once "./controllers/AurandyController.php";

$barangController = new BarangController();

$fatahController = new FatahController();
$rohimController = new RohimContoller();
$MajidController = new MajidController();
$AzriController = new AzriController();
$michaelController = new MichaelController();
$DaniController = new DaniController();
$AurandyController = new AurandyController();

$routes = [
    "barang" => [$barangController, "index"],
    "barang/create" => [$barangController, "store"],

   

    "fatah" => [$fatahController, "index"],
    "fatah/store" => [$fatahController, "store"],
    "fatah/delete" => [$fatahController, "delete"],
    "fatah/edit" => [$fatahController, "edit"],

    "rohim" => [$rohimController, "index"],
    "rohim/store" => [$rohimController, "store"],
    "rohim/delete" => [$rohimController, "delete"],
    "rohim/edit" => [$rohimController, "edit"],

    "majid" => [$MajidController, "index"],
    "majid/store" => [$MajidController, "store"],
    "majid/delete" => [$MajidController, "delete"],
    "majid/edit" => [$MajidController, "edit"],

    "azri" => [$AzriController, "index"],
    "azri/store" => [$AzriController, "store"],
    "azri/delete" => [$AzriController, "delete"],
    "azri/edit" => [$AzriController, "edit"],
    "michael" => [$michaelController, "index"],
    "michael/store" => [$michaelController, "store"],
    "michael/delete" => [$michaelController, "delete"],
    "michael/edit" => [$michaelController, "edit"],

    "azri/edit" => [$AzriController, "edit"],

    "dani" => [$DaniController, "index"],
    "dani/store" => [$DaniController, "store"],
    "dani/delete" => [$DaniController, "delete"],
    "dani/edit" => [$DaniController, "edit"],

    "aurandy" => [$AurandyController, "index"],
    "aurandy/store" => [$AurandyController, "store"],
    "aurandy/delete" => [$AurandyController, "delete"],
    "aurandy/edit" => [$AurandyController, "edit"],
];

$action = $_GET["route"] ?? header("Location: aurandy");;


if (array_key_exists($action, $routes)) {
    call_user_func($routes[$action]);
} else {
    echo "Route tidak ditemukan";
}
