<?php
require_once "./models/rohim.php";



class RohimContoller
{
    public function index()
    {
        $rohimModel = new Rohim();
        $data = $rohimModel->getAllData();
        include "./views/rohim.php";
    }
}
?>