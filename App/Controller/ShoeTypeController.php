<?php

namespace App\Controller;
use App\Model\shoeTypeModel;
class ShoeTypeController
{
    public $shoeTypeModel;
    public function __construct()
    {
        $this->shoeTypeModel = new ShoeTypeModel();
    }
    public function showAll()
    {
        $shoeTypes = $this->shoeTypeModel->showAll();
//        var_dump($shoeTypes);
//        die();
        include "App/View/shoeType/list.php";
    }
    public function showById()
    {
        $shoeTypes = $this->shoeTypeModel->showById($_GET["id"]);
//        var_dump($products);
//        die();
        include "App/View/shoeType/detail.php";
    }
    public function deleteById()
    {
        $this->shoeTypeModel->deleteById($_GET["id"]);
        header("location:index.php?page=shoeType-list");
    }
    public function createShoeType(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            include "App/View/shoeType/create.php";
        }
        else {
//            $data=[
//                "name"=>$_REQUEST["name"],
//            ];
            $this->shoeTypeModel->createShoeType($_POST);
            header("location:index.php?page=shoeType-list");
        }}
    public function updateShoeType(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            $data = $this->shoeTypeModel->showById($_GET["id"]);
            include "App/View/shoeType/update.php";
        }
        else {

            $this->shoeTypeModel->updateShoeType($_GET["id"],$_POST);
            header("location:index.php?page=shoeType-list");
        }
    }
}
