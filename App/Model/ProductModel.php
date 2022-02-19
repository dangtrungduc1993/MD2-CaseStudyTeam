<?php

namespace App\Model;
class ProductModel extends BaseModel
{
    public $table = "products";

    public function showAll()
    {
        $sql = "select products.id as id, products.name as Name, image,price, quantity, content,shoetypes.name as Type, brands.name as Brand, sizes.size as Sizes from products
                join shoetypes on products.shoeType_id = shoetypes.id
                join brands on products.brand_id = brands.id
                join sizes on products.size_id = sizes.id
            ";

        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function showById($id)
    {
        $sql = "select products.id as id, products.name as Name, image,price, quantity, content,shoetypes.name as Type, brands.name as Brand, sizes.size as Sizes from products
                join shoetypes on products.shoeType_id = shoetypes.id
                join brands on products.brand_id = brands.id
                join sizes on products.size_id = sizes.id where products.id =$id"         ;
//        $sql = "select * from products where id = ".$id;
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
    public function deleteById($id)
    {
         $sql = "delete from $this->table where id =".$id;
         $this->connect->query($sql);

    }



    public function createProduct($data)
    {
        $sql = "insert into products (name , image, price, quantity, content, shoeType_id, brand_id, size_id) values (?,?,?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["name"]);
        $stmt->bindParam(2,$data["image"]);
        $stmt->bindParam(3,$data["price"]);
        $stmt->bindParam(4,$data["quantity"]);
        $stmt->bindParam(5,$data["content"]);
        $stmt->bindParam(6,$data["shoeType_id"]);
        $stmt->bindParam(7,$data["brand_id"]);
        $stmt->bindParam(8,$data["size_id"]);
        $stmt->execute();
    }
    public function updateProduct($id,$data){
        $sql="update products set name = ?, image = ?, price = ?, quantity = ?, content = ?, content = ?, shoeType_id = ?, brand_id = ?, size_id = ? where  id=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["name"]);
        $stmt->bindParam(2,$data["image"]);
        $stmt->bindParam(3,$data["price"]);
        $stmt->bindParam(4,$data["quantity"]);
        $stmt->bindParam(5,$data["content"]);
        $stmt->bindParam(6,$data["shoeType_id"]);
        $stmt->bindParam(7,$data["brand_id"]);
        $stmt->bindParam(8,$data["size_id"]);
        $stmt->bindParam(9,$id);
        $stmt->execute();
//        header("location:index.php?page=product-list");
    }

}