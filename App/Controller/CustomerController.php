<?php

namespace App\Controller;
use App\Model\CustomerModel;
class CustomerController
{
    public $customerModel;
    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }
    public function showAll()
    {
        $customers = $this->customerModel->showAll();
//        var_dump($Customers);
//        die();
        include "App/View/customer/list.php";
    }
    public function showById($id)
    {
        $customers = $this->customerModel->showById($id);
//        var_dump($products);
//        die();
        include "App/View/customer/detail.php";
    }
    public function deleteById($id)
    {
        $this->customerModel->deleteById($id);
        header("location:index.php?page=customer-list");
    }
    public function createCustomer(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            include "App/View/customer/create.php";
        }
        else {
            $data=[
                "name"=>$_REQUEST["name"],
                "email"=>$_REQUEST["email"],
                "password"=>$_REQUEST["password"],
            ];
            $this->customerModel->createCustomer($data);
            header("location:index.php?page=customer-list");
        }}
    public function updateCustomer(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            $data = $this->customerModel->showById($_GET["id"]);
            include "App/View/customer/update.php";
        }
        else {

            $this->customerModel->updateCustomer($_REQUEST["id"],$_POST);
            header("location:index.php?page=customer-list");
        }
    }
}