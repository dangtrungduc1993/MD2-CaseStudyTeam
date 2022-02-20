<?php

namespace App\Controller;


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

    public function createProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "App/View/product/create.php";
        } else {
            $this->productModel->createProduct($_POST);
            header("location:index.php?page=product-list");
        }
    }

    public function updateProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $data = $this->productModel->showById($_GET["id"]);
            include "App/View/product/update.php";
        } else {
            $this->productModel->updateProduct($_REQUEST["id"], $_POST);
            header("location:index.php?page=product-list");
        }
    }
}

