<?php
session_start();
require "vendor/autoload.php";

use App\Controller\AdminController;
use App\Controller\ProductController;
use App\Controller\sizeController;
use App\Controller\BrandController;
use App\Controller\ShoeTypeController;
use App\Controller\CustomerController;
use App\Model\ProductModel;

$admin = new AdminController();
$productController = new ProductController();
$sizeController = new SizeController();
$brandController = new BrandController();
$shoeTypeController = new ShoeTypeController();
$customerController = new CustomerController();

$page = $_GET["page"] ?? "";

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


<?php
switch ($page) {

    case "product-list":
        $productController->showAll();
        break;
        $productController->showById($_GET["id"]);
        break;
    case "product-delete":
        $productController->deleteById($_GET["id"]);
        break;
    case "product-create":
        $productController->createProduct($_POST);
        break;
    case "product-update":
        $productController->updateProduct($_POST);
        break;


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
        $sizeController->createsize();
        break;
    case "size-update":
        $sizeController->updatesize();
        break;


    case "shoeType-list":
        $shoeTypeController->showAll();
        break;
    case "shoeType-detail":
        $shoeTypeController->showById();
        break;
    case "shoeType-delete":
        $shoeTypeController->deleteById();
        break;
    case "shoeType-create":
        $shoeTypeController->createShoeType();
        break;
    case "shoeType-update":
        $shoeTypeController->updateShoeType();
        break;


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
        break;


    case "customer-list":
        $customerController->showAll();
        break;
    case "customer-detail":
        $customerController->showById($_GET["id"]);
        break;


    case "login":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $admin->showFormLogin();
        } else {
            $admin->login($_REQUEST);
        }
        break;
    case "logout":
        $admin->logout();
        break;


    case "admin":
        $admin->admin();
        break;
    case "home":
        $admin->home();
        break;
    case "home-detail":
        $admin->showAll();
        break;


    default:
        header("Location:index.php?page=home");

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
