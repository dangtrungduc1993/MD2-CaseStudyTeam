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
        include_once "App/View/product/list.php";
    }

}