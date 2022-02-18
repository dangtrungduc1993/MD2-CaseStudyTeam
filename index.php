<?php

use App\Model\AdminModel;

require "vendor/autoload.php";
$admin = new AdminModel();

echo "<pre>";
var_dump($admin->getAll());
?>