<?php

namespace App\Model;

class ShoeTypeModel extends BaseModel
{
    public $table = "shoetypes";

    public function createShoeType($data)
    {
        $sql = "insert into shoetypes (name) values (?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["name"]);
        $stmt->execute();
    }
    public function updateShoeType($id,$data){
//        var_dump($data);
//        die();
        $sql="update shoetypes set name = ? where  id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["name"]);
        $stmt->bindParam(2,$id);
        $stmt->execute();
    }


}