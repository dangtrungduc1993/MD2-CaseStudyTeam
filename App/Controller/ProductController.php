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
        var_dump($products);
        die();
        include "App/View/product/detail.php";
    }

}