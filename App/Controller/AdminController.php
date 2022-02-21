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
            $_SESSION["admin"] = $this->adminController->getByEmail($request["email"]);
            header("location:index.php?page=product-list");
        } else {
            header("location:index.php?page=login");
        }
    }


    public function logout()
    {
        unset($_SESSION["admin"]);
        header("Location:index.php?page=login");
    }

    public function showFormLogin()
    {

        if (isset($_SESSION["admin"])) {
            header("location:index.php?page=product-list");
        }
        include "App/View/login/login.php";
    }

    public function admin()
    {
        if ($_SESSION["admin"]){
            include "App/View/admin/admin.php";
        }else{
            header("location:index.php?product-list");
        }
    }


}