<?php



require "vendor/autoload.php";
use App\Controller\ProductController;
use App\Controller\shoeTypeController;
use App\Model\AdminModel;

$admin = new AdminModel();
$productController = new ProductController();
$shoeTypeController = new shoeTypeController();
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
</head>
<body>
<a href="index.php?page=product-list">Show list Product</a>
<a href="index.php?page=shoeType-list">Show list Shoe Type</a>
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

    }

?>

</body>
</html>
