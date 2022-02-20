<?php
session_start();
require "vendor/autoload.php";

use App\Controller\AdminController;
use App\Controller\ProductController;
use App\Controller\shoeTypeController;
use App\Controller\BrandController;
use App\Controller\SizeController;
use App\Controller\CustomerController;



use App\Model\AdminModel;

$admin = new AdminController();
$productController = new ProductController();
$shoeTypeController = new shoeTypeController();
$brandController = new BrandController();
$sizeController = new SizeController();
$customerController = new CustomerController();



$page = $_GET["page"]??"";




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

<a href="index.php?page=product-list">Show list Product</a>
<a href="index.php?page=shoeType-list">Show list Shoe Type</a>
<a href="index.php?page=brand-list">Show list Brand</a>
<a href="index.php?page=size-list">Show list Size</a>
<a href="index.php?page=customer-list">Show list Customer</a>
<a href="index.php?page=customer-list">Show list Admin</a>
<?php
    switch ($page){
        case "product-list":
            $productController->showAll();
            break;
        case "product-detail":
            $productController->showById($_GET["id"]);
            break;
        case "product-delete":
            $productController->deleteById($_GET["id"]);
            break;
        case "product-create":
            $productController->createProduct();
            break;
        case "product-update":
            $productController->updateProduct();
            break;



        case "shoeType-list":
            $shoeTypeController->showAll();
            break;
        case "shoeType-detail":
            $shoeTypeController->showById($_GET["id"]);
            break;
        case "shoeType-delete":
            $shoeTypeController->deleteById($_GET["id"]);
            break;
        case "shoeType-create":
            $shoeTypeController->createShoeType();
            break;
        case "shoeType-update":
            $shoeTypeController->updateShoeType();


        case "brand-list":
            $brandController->showAll();
            break;
        case "brand-detail":
            $brandController->showById($_GET["id"]);
            break;
        case "brand-delete":
            $brandController->deleteById($_GET["id"]);
            break;
        case "brand-create":
            $brandController->createBrand();
            break;
        case "brand-update":
            $brandController->updateBrand();


        case "size-list":
            $sizeController->showAll();
            break;
        case "size-detail":
            $sizeController->showById($_GET["id"]);
            break;
        case "size-delete":
            $sizeController->deleteById($_GET["id"]);
            break;
        case "size-create":
            $sizeController->createSize();
            break;
        case "size-update":
            $sizeController->updateSize();


        case "customer-list":
            $customerController->showAll();
            break;
        case "customer-detail":
            $customerController->showById($_GET["id"]);
            break;
        case "customer-delete":
            $customerController->deleteById($_GET["id"]);
            break;
        case "customer-create":
            $customerController->createCustomer();
            break;
        case "customer-update":
            $customerController->updateCustomer();


        case "admin-list":
            $admin->showAll();
            break;
        case "admin-detail":
            $admin->showById($_GET["id"]);
            break;
        case "admin-delete":
            $admin->deleteById($_GET["id"]);
            break;
        case "admin-create":
            $admin->createAdmin();
            break;
        case "admin-update":
            $adminController->updateAdmin();


        break;
        case "login":
            if ($_SERVER["REQUEST_METHOD"] == "GET"){
                $admin->showFormLogin();
            }else{
                $admin->login();
            }
            break;

            default:
                    header("location:index.php?page=login");


}


?>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>
