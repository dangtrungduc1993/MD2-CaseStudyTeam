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



    public function showAll()
    {
        $admins = $this->adminController->showAll();
//        var_dump($Customers);
//        die();
        include "App/View/admin/list.php";
    }
    public function showById($id)
    {
        $admins = $this->adminController->showById($id);
//        var_dump($products);
//        die();
        include "App/View/admin/detail.php";
    }
    public function deleteById($id)
    {
        $this->adminController->deleteById($id);
        header("location:index.php?page=admin-list");
    }
    public function createAdmin(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            include "App/View/admin/create.php";
        }
        else {
            $data=[
                "name"=>$_REQUEST["name"],
                "email"=>$_REQUEST["email"],
                "password"=>$_REQUEST["password"],
            ];
            $this->adminController->createAdmin($data);
            header("location:index.php?page=admin-list");
        }}
    public function updateAdmin(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            $data = $this->adminController->showById($_GET["id"]);
            include "App/View/admin/update.php";
        }
        else {

            $this->adminController->updateAdmin($_REQUEST["id"],$_POST);
            header("location:index.php?page=admin-list");
        }
    }




}