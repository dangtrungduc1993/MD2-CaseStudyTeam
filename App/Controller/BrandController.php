<?php

namespace App\Controller;
use App\Model\BrandModel;
class BrandController
{
    public $brandModel;
    public function __construct()
    {
        $this->brandModel = new BrandModel();
    }
    public function showAll()
    {
        $brands = $this->brandModel->showAll();
//        var_dump($brands);
//        die();
        include "App/View/brand/list.php";
    }
    public function showById($id)
    {
        $brands = $this->brandModel->showById($id);
//        var_dump($products);
//        die();
        include "App/View/brand/detail.php";
    }
    public function deleteById($id)
    {
        $this->brandModel->deleteById($id);
        header("location:index.php?page=brand-list");
    }
    public function createBrand(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            include "App/View/brand/create.php";
        }
        else {
            $data=[
                "name"=>$_REQUEST["name"],
            ];
            $this->brandModel->createBrand($data);
            header("location:index.php?page=brand-list");
        }}
    public function updateBrand(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            $data = $this->brandModel->showById($_GET["id"]);
            include "App/View/brand/update.php";
        }
        else {

            $this->brandModel->updateBrand($_REQUEST["id"],$_POST);
            header("location:index.php?page=brand-list");
        }
    }
}