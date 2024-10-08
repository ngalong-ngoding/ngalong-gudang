<?php

require_once "./models/Majid.php";

class MajidController
{
    public function index()
    {
        $MajidModel = new Majid();
        $data = $MajidModel->getAllData();
        include "./views/Majid.php";
    }
}