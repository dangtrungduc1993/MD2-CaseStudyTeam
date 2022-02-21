<?php include "App/View/layout/layoutHome.php" ?>

<div class="container mt-4 ">
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=shoeType-list">Show list Shoe Type</a>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=brand-list">Show list Brand</a>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=size-list">Show list Size</a>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=customer-list">Show list Customer</a>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=product-create">Create Product</a>
<table style="background-color: #ffffff ; color: #000000" class="table table-bordered table-dark">
    <thead style="text-align: center">
    <tr>
        <th>STT</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Content</th>
        <th>Type</th>
        <th>Brand</th>
        <th>Size</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $key => $product): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><img width="100px" style="margin: 5px" src="<?php echo $product->image ?>" alt=""></td>
                <td><?php echo $product->Name ?></td>
                <td><?php echo $product->price ?></td>
                <td><?php echo $product->quantity ?></td>
                <td><?php echo $product->content ?></td>
                <td><?php echo $product->Type ?></td>
                <td><?php echo $product->Brand ?></td>
                <td><?php echo $product->Sizes ?></td>
                <td><a href="index.php?page=product-detail&id=<?php echo $product->id ?>">Detail</a></td>
                <td><a href="index.php?page=product-update&id=<?php echo $product->id ?>">Update</a></td>
                <td><a onclick="return confirm('Are you sure ?')" href="index.php?page=product-delete&id=<?php echo $product->id?>">Delete</a></td>


            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">Chưa có sản phẩm nào</td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>
</div>