<?php

namespace App\Model;

class AdminModel extends BaseModel
{
    public $table = "admins";

    public function createAdmin($data)
    {
        $sql = "insert into admins (name,email,password) values (?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["email"]);
        $stmt->bindParam(3, $data["password"]);
        $stmt->execute();
    }

    public function updateAdmin($id, $data)
    {
//
        $sql = "update this->table set name = ?, email = ?, password = ? where  id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["email"]);
        $stmt->bindParam(3, $data["password"]);
        $stmt->bindParam(4, $id);
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

    public function getByEmail($email)
    {
        $sql = "select * from $this->table where email = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }



}