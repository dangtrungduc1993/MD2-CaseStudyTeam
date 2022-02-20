<?php
namespace App\Controller;
use App\Model\shoeTypeModel;
use App\Model\ProductModel;

class ProductController
{
    public $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
    public function showAll()
    {
        $products = $this->productModel->showAll();
//        var_dump($products);
//        die();
        include "App/View/product/list.php";
    }
    public function showById($id)
    {
        $products = $this->productModel->showById($id);
//        var_dump($products);
//        die();
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
//                var_dump($data);
//                die();
                include "App/View/product/update.php";
            }
            else {

                $this->productModel->updateProduct($_REQUEST["id"],$_POST);
                header("location:index.php?page=product-list");
            }
        }
    }

