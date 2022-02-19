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
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            include "App/View/login/login.php";
        }else {
            if ($this->checkAdmin($_POST) == true){

                include "App/View/layout/layoutHome.php";
            }else{
                include "App/View/login/login.php";
            }
        }

    }

    public function checkAdmin($request) : bool
    {
        $datas = $this->adminController->getAll();
//        var_dump($datas);
//        die();
        foreach ($datas as $data){
            if ($data->email === $request["email"] && $data->password === $request["password"]){
                $_SESSION["admin"] = $data;

                return true;
            }
        }
        return false;

    }

    public function createAcc()
    {
        if ($_SERVER["REQUEST_METHOD"] =="GET"){
        include "App/View/login/createAnAccount.php";

        }

    }


}