<form action="" method="post">
    <input type="text" name="name" value="<?php echo $data->Name?>">
    <input type="text" name="image"value="<?php echo $data->image?>">
    <input type="text" name="price"value="<?php echo $data->price?>">
    <input type="text" name="quantity"value="<?php echo $data->quantity?>">
    <input type="text" name="content" value="<?php echo $data->content?>">
    <input type="text" name="shoeType_id" value="<?php echo $data->Type?>">
    <input type="text" name="brand_id" value="<?php echo $data->Brand?>">
    <input type="text" name="size_id" value="<?php echo $data->Sizes?>">
    <button>Update</button>
</form>
