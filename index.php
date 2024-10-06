<?php



require_once "./controllers/FatahController.php";
require_once "./controllers/MajidController.php";

$fatahController = new FatahController();
$MajidController = new MajidController();

$routes = [
    "fatah" => [$fatahController, "index"],
    "fatah/store" => [$fatahController, "store"],
    "fatah/delete" => [$fatahController, "delete"],
    "fatah/edit" => [$fatahController, "edit"],
    "majid" => [$MajidController, "index"],
    "majid/store" => [$MajidController, "store"],
    "majid/delete" => [$MajidController, "delete"],
    "majid/edit" => [$MajidController, "edit"], 
   
];


$action = $_GET["route"] ?? header("Location: majid");;


if (array_key_exists($action, $routes)) {
    call_user_func($routes[$action]);
} else {
    echo "Route tidak ditemukan";
}