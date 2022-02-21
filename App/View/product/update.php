<?php include "App/View/layout/layoutHome.php" ?>
<div class="container mt-3">
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name" value="<?php echo $data->Name?>">
    <input type="file" name="image"value="<?php echo $data->image?>">
    <input type="text" name="price"value="<?php echo $data->price?>">
    <input type="text" name="quantity"value="<?php echo $data->quantity?>">
    <input type="text" name="content" value="<?php echo $data->content?>">
    <select name="shoeType_id" id="">
        <?php foreach ($shoeTypes as $shoeType): ?>
            <option value="<?php echo $shoeType->id?>"><?php echo $shoeType->name?></option>
        <?php endforeach; ?>
    </select>
    <select name="brand_id" id="">
        <?php foreach ($brands as $brand): ?>
            <option value="<?php echo $brand->id?>"><?php echo $brand->name?></option>
        <?php endforeach; ?>
    </select>
    <select name="size_id" id="">
        <?php foreach ($sizes as $size): ?>
            <option value="<?php echo $size->id?>"><?php echo $size->size?></option>
        <?php endforeach; ?>
    </select>
    <button>Update</button>
</form>
</div>