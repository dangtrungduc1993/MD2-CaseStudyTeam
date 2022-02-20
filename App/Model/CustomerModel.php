<?php

namespace App\Model;

class CustomerModel extends BaseModel
{
    public $table = "customers";

    public function createCustomer($data)
    {
        $sql = "insert into customers (name,email,password) values (?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["name"]);
        $stmt->bindParam(2,$data["email"]);
        $stmt->bindParam(3,$data["password"]);
        $stmt->execute();
    }
    public function updateCustomer($id,$data){
//        var_dump($data);
//        die();
        $sql="update customers set name = ?, email = ?, password = ? where  id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["name"]);
        $stmt->bindParam(2,$data["email"]);
        $stmt->bindParam(3,$data["password"]);
        $stmt->bindParam(4,$id);
        $stmt->execute();
    }


}