<?php

namespace App\Controller;


use App\Model\BrandModel;
use App\Model\ProductModel;
use App\Model\ShoeTypeModel;
use App\Model\SizeModel;

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

    public function createProduct($request)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $shoeTypeModel = new ShoeTypeModel();
            $shoeTypes = $shoeTypeModel->showAll();
            $brandModel = new BrandModel();
            $brands = $brandModel->showAll();
            $sizeModel = new SizeModel();
            $sizes = $sizeModel->showAll();

            include "App/View/product/create.php";
        } else {
            $request["image"] = $this->uploadImg();
            $this->productModel->createProduct($request);
            header("location:index.php?page=product-list");
        }
    }

    public function updateProduct($request)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $shoeTypeModel = new ShoeTypeModel();
            $shoeTypes = $shoeTypeModel->showAll();
            $brandModel = new BrandModel();
            $brands = $brandModel->showAll();
            $sizeModel = new SizeModel();
            $sizes = $sizeModel->showAll();

            $data = $this->productModel->showById($_GET["id"]);
            include "App/View/product/update.php";
        } else {
            $request["image"] = $this->uploadImg();

            $this->productModel->updateProduct($_REQUEST["id"], $request);
            header("location:index.php?page=product-list");
        }
    }

    public function uploadImg($name = "default.png")
    {
        $target_dir = "uploads/";
        $target_file =  $target_dir. time() .basename($_FILES["image"]["name"]);
        $default = $target_dir.$name;
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            return $default;
        }
    }
}

