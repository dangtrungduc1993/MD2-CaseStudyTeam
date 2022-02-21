<?php include "App/View/layout/layoutHome.php" ?>

<div class="container mt-3">
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nhập tên giày</label>
        <input type="text" name="name" class="form-control" placeholder="Nhập tên giày">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Chọn ảnh giày</label>
        <input type="file" name="image"  placeholder="Chọn ảnh giày">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nhập giá giày</label>
        <input type="number" name="price" class="form-control" placeholder="Nhập giá giày">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nhập số lượng</label>
        <input type="number" name="quantity"placeholder="Nhập số lượng" class="form-control" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nhập mô tả sản phẩm</label>
        <textarea name="content" placeholder="Nhập mô tả sản phẩm" class="form-control" ></textarea>
<!--        <input type="text" name="content" placeholder="Nhập mô tả săn phẩm" class="form-control" >-->
    </div>
    <div class="form-group">
<!--        <label for="exampleFormControlSelect1">Example select</label>-->
        <select class="form-control" name="shoeType_id" id="exampleFormControlSelect1">
            <?php foreach ($shoeTypes as $shoeType): ?>
                <option value="<?php echo $shoeType->id?>"><?php echo $shoeType->name?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
<!--        <label for="exampleFormControlSelect1">Example select</label>-->
        <select class="form-control" name="brand_id" id="exampleFormControlSelect1">
            <?php foreach ($brands as $brand): ?>
                <option value="<?php echo $brand->id?>"><?php echo $brand->name?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
<!--        <label for="exampleFormControlSelect1">Example select</label>-->
        <select class="form-control" name="size_id" id="exampleFormControlSelect1">
            <?php foreach ($sizes as $size): ?>
                <option value="<?php echo $size->id?>"><?php echo $size->size?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button>Create</button>
</form>
</div>
    <a type="button" class="btn btn-primary" href="index.php?page=product-list">Back</a>
