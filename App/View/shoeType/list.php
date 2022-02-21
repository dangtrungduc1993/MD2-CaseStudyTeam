<?php include "App/View/layout/layoutHome.php" ?>

<div class="container mt-3">
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=product-list">Show list Product</a>
<!--    <a href="index.php?page=shoeType-list">Show list Shoe Type</a>-->
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=brand-list">Show list Brand</a>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=size-list">Show list Size</a>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=customer-list">Show list Customer</a>
<a type="button" class="btn btn-primary mb-4" href="index.php?page=shoeType-create">Create ShoeType</a>

<table style="background-color: #ffffff ; color: #000000" class="table table-bordered table-dark">
    <thead style="text-align: center">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($shoeTypes)): ?>
        <?php foreach ($shoeTypes as $key => $shoeType): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $shoeType->name ?></td>
                <td><a href="index.php?page=shoeType-detail&id=<?php echo $shoeType->id?>">Detail</a></td>
                <td><a href="index.php?page=shoeType-update&id=<?php echo $shoeType->id?>">Update</a></td>
                <td><a onclick="return confirm('Are you sure ?')" href="index.php?page=shoeType-delete&id=<?php echo $shoeType->id?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">Chưa có loại giày nào</td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>
</div>
