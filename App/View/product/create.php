<?php include "App/View/layout/layoutHome.php" ?>

<div class="container">
<div class="mt-3">
    <form action="" method="post">
        <input type="text" name="name" placeholder="Nhập tên giày">
        <input type="text" name="image" placeholder="Chọn ảnh giày">
        <input type="text" name="price" placeholder="Nhập giá giày">
        <input type="text" name="quantity"placeholder="Nhập số lượng">
        <input type="text" name="content" placeholder="Nhập mô tả săn phẩm">
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

        <button>Create</button>
    </form>
</div>
</div>
