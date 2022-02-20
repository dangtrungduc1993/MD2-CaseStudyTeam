<?php

namespace App\Controller;
use App\Model\SizeModel;
class SizeController
{
    public $sizeModel;
    public function __construct()
    {
        $this->sizeModel = new SizeModel();
    }
    public function showAll()
    {
        $sizes = $this->sizeModel->showAll();
//        var_dump($Sizes);
//        die();
        include "App/View/size/list.php";
    }
    public function showById($id)
    {
        $sizes = $this->sizeModel->showById($id);
//        var_dump($products);
//        die();
        include "App/View/size/detail.php";
    }
    public function deleteById($id)
    {
        $this->sizeModel->deleteById($id);
        header("location:index.php?page=size-list");
    }
    public function createSize(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            include "App/View/size/create.php";
        }
        else {
            $data=[
                "size"=>$_REQUEST["size"],
            ];
            $this->sizeModel->createSize($data);
            header("location:index.php?page=size-list");
        }}
    public function updateSize(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            $data = $this->sizeModel->showById($_GET["id"]);
            include "App/View/size/update.php";
        }
        else {
            $this->sizeModel->updateSize($_REQUEST["id"],$_POST);
            header("location:index.php?page=size-list");
        }
    }
}