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

        include "App/View/customer/list.php";
    }
    public function showById($id)
    {
        $customers = $this->customerModel->showById($id);
        include "App/View/customer/detail.php";
    }

}