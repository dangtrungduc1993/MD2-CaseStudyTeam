<?php

namespace App\Model;
class ProductModel extends BaseModel
{
    public $table = "products";

    public function getAll()
    {
        $sql = "select products.id as id, products.name , image, price, quantity, content, shoeType_id as Type, brand_id as Brand, size_id as Size  
                from products join shoeTypes on shoeType_id = shoeTypes.id 
               join brand on brand_id = brands.id
                join sizes on size_id = sizes.id
                order by id desc";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function create($data)
    {
        $sql = "insert into products (name , image, price, quantity, content, shoeType_id, brand_id, size_id) values (?,?,?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["name"]);
        $stmt->bindParam(2,$data["image"]);
        $stmt->bindParam(3,$data["price"]);
        $stmt->bindParam(4,$data["quantity"]);
        $stmt->bindParam(5,$data["content"]);
        $stmt->bindParam(5,$data["shoeType_id"]);
        $stmt->bindParam(5,$data["brand_id"]);
        $stmt->bindParam(5,$data["size_id"]);
        $stmt->execute();
    }
}