<?php

namespace App\Controller;
use App\Model\shoeTypeModel;
class shoeTypeController
{
    public $shoeTypeModel;
    public function __construct()
    {
        $this->shoeTypeModel = new shoeTypeModel();
    }
    public function showAll()
    {
        $shoeTypes = $this->shoeTypeModel->showAll();
//        var_dump($shoeTypes);
//        die();
        include "App/View/shoeType/list.php";
    }

    public function showById($id)
    {
        $products = $this->productModel->showById($id);

        include "App/View/product/detail.php";
    }
    public function deleteById($id)
    {
        $this->productModel->deleteById($id);
        header("location:index.php?page=product-list");
    }
    public function createProduct(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            include "App/View/product/create.php";
        }
        else {
            $data=[
                "name"=>$_REQUEST["name"],
                "image"=>$_REQUEST["image"],
                "price"=>$_REQUEST["price"],
                "quantity"=>$_REQUEST["quantity"],
                "content"=>$_REQUEST["content"],
                "shoeType_id"=>$_REQUEST["shoeType_id"],
                "brand_id"=>$_REQUEST["brand_id"],
                "size_id"=>$_REQUEST["size_id"]
            ];
            $this->productModel->createProduct($data);
            header("location:index.php?page=product-list");
        }}
    public function updateProduct(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            $data = $this->productModel->showById($_GET["id"]);
            include "App/View/product/update.php";
        }
        else {

            $this->productModel->updateProduct($_REQUEST["id"],$_POST);
            header("location:index.php?page=product-list");
        }
    }
}