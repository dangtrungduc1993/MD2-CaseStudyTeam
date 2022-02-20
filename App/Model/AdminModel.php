<?php

namespace App\Model;

class AdminModel extends BaseModel
{
    public $table = "admins";

    public function createAdmin($data)
    {
        $sql = "insert into admins (name,email,password) values (?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["name"]);
        $stmt->bindParam(2,$data["email"]);
        $stmt->bindParam(3,$data["password"]);
        $stmt->execute();
    }
    public function updateAdmin($id,$data){
//        var_dump($data);
//        die();
        $sql="update admins set name = ?, email = ?, password = ? where  id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["name"]);
        $stmt->bindParam(2,$data["email"]);
        $stmt->bindParam(3,$data["password"]);
        $stmt->bindParam(4,$id);
        $stmt->execute();
    }

    public function checkLogin($email, $password): bool
    {
        $sql = "select * from admins where email=? and password=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }



}