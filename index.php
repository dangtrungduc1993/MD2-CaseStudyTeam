<?php
session_start();
require "vendor/autoload.php";

use App\Controller\AdminController;
use App\Controller\ProductController;
<<<<<<< HEAD
use App\Controller\shoeTypeController;
=======

<<<<<<< HEAD
=======
>>>>>>> c6eeeda91119d2020693d8a47ebe9ddb4b8d2cf1
use App\Model\AdminModel;
>>>>>>> 21058593e189efbf676d43a4a962eb83db940602

$admin = new AdminController();
$productController = new ProductController();
<<<<<<< HEAD
$shoeTypeController = new shoeTypeController();
$page = $_GET["page"]??"";
=======
$page = $_GET["page"] ?? "";
>>>>>>> c6eeeda91119d2020693d8a47ebe9ddb4b8d2cf1

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
<<<<<<< HEAD
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
=======
<?php include "App/View/layout/layoutLogin.php"?>
    <!--<a href="index.php?page=product-list">Show list</a>-->
<?php
switch ($page) {
    case "product-list":
        $productController->showAll();
        break;
    case "product-detail":
        $productController->showById($_GET["id"]);
        break;
    case "login":
       $admin->login();
        break;
    default:
}
>>>>>>> c6eeeda91119d2020693d8a47ebe9ddb4b8d2cf1

?>

<form action="" method="post">
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" name="email" id="defaultForm-email" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" name="password" id="defaultForm-pass" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default">Login</button>
                </div>
            </div>
        </div>
    </div>
</form>


<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="orangeForm-name" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
                </div>
                <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="email" id="orangeForm-email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-pass" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange">Sign up</button>
            </div>
        </div>
    </div>
</div>



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
