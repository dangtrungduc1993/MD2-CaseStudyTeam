<?php

namespace App\Model;

class SizeModel extends BaseModel
{
    public $table = "sizes";

    public function createSize($data)
    {
        $sql = "insert into sizes (size) values (?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["size"]);
        $stmt->execute();
    }
    public function updateSize($id,$data){
//        var_dump($data);
//        die();
        $sql="update sizes set size = ? where  id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["size"]);
        $stmt->bindParam(2,$id);
        $stmt->execute();
    }


}