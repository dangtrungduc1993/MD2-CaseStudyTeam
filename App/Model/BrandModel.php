<?php

namespace App\Model;

class BrandModel extends BaseModel
{
    public $table = "brands";

    public function createBrand($data)
    {
        $sql = "insert into brands (name) values (?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["name"]);
        $stmt->execute();
    }
    public function updateBrand($id,$data){
//        var_dump($data);
//        die();
        $sql="update brands set name = ? where  id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["name"]);
        $stmt->bindParam(2,$id);
        $stmt->execute();
    }


}