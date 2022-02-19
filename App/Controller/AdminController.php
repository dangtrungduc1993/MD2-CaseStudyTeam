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

    public function login()
    {
        if ($this->checkAdmin($_POST) == true) {
            include "App/View/layout/layoutHome.php";
        } else {
            include "App/View/login/login.php";
        }


    }

    public function showFormLogin()
    {
        if (isset($_SESSION["admin"])) {
            header("location:index.php=page=");
        }
        include_once "App/View/layout/layoutLogin.php";
    }

    public function checkAdmin($request): bool
    {
        $datas = $this->adminController->getAll();
        foreach ($datas as $data) {
            if ($data->email === $request["email"] && $data->password === $request["password"]) {
                $_SESSION["admin"] = $data;

                return true;
            }
        }
        return false;

    }




}