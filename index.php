<?php



require_once "./controllers/FatahController.php";
require_once "./controllers/RohimContoller.php";
require_once "./controllers/MajidController.php";
require_once "./controllers/AzriController.php";
require_once "./controllers/MichaelController.php";

$fatahController = new FatahController();
$rohimController = new RohimContoller();
$MajidController = new MajidController();
$AzriController = new AzriController();
$michaelController = new MichaelController();

$routes = [
    "fatah" => [$fatahController, "index"],
    "rohim" => [$rohimController, "index"],
    "rohim/store" => [$rohimController, "store"],
    "rohim/delete" => [$rohimController, "delete"],
    "rohim/edit" => [$rohimController, "edit"],
    "fatah/store" => [$fatahController, "store"],
    "fatah/delete" => [$fatahController, "delete"],
    "fatah/edit" => [$fatahController, "edit"],
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
   
];

$action = $_GET["route"] ?? header("Location: azri");;


if (array_key_exists($action, $routes)) {
    call_user_func($routes[$action]);
} else {
    echo "Route tidak ditemukan";
}