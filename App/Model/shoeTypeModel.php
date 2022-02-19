<?php

namespace App\Model;

class shoeTypeModel extends BaseModel
{
    public $table;
    public function __construct()
    {
        $this->table = "shoetypes";
    }

}