<?php

namespace App\Model;

class BaseModel
{
    public $connect;
    public $table;

    public function __construct()
    {
        $db = new DBConnect();
        $this->connect = $db->connect();
    }


    public function showAll()
    {
        $sql = "select * from $this->table";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function showById($id)
    {
        $sql = "select * from $this->table where id = " . $id;
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function deleteById($id)
    {
        try {
            $sql = "delete from $this->table where id = " . $id;
            $this->connect->query($sql);
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }
}