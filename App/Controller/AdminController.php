<?php
namespace App\Controller;

use App\Model\AdminModel;

class AdminController
{
    public $adminController;

    public function __construct()
    {
        $this->adminController = new AdminModel();
    }

    public function login($request)
    {
        if ($this->adminController->checkLogin($request["email"], $request["password"])) {
            $_SESSION["user"] = $this->adminController->showAll();
            header("location:index.php?page=product-list");
        } else {
            header("location:index.php?page=login");
        }
    }


    public function logout()
    {
        unset($_SESSION["user"]);
        header("Location:index.php?page=login");
    }

    public function showFormLogin()
    {

        if (isset($_SESSION["user"])) {
            header("location:index.php?page=product-list");
        }
        include_once "App/View/login/login.php";
    }


}