<?php include "App/View/layout/layoutHome.php"?>


<div class="container mt-4">
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=product-list">Show list Product</a>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=shoeType-list">Show list Shoe Type</a>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=brand-list">Show list Brand</a>
<!--    <a href="index.php?page=size-list">Show list Size</a>-->
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=customer-list">Show list Customer</a>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=size-create">Create Size</a>
    <table style="background-color: #ffffff ; color: #000000" class="table table-bordered table-dark">
        <thead style="text-align: center">
        <tr>
            <th>STT</th>
            <th>Size</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($sizes)): ?>
            <?php foreach ($sizes as $key => $size): ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $size->size ?></td>
                    <td><a href="index.php?page=size-detail&id=<?php echo $size->id?>">Detail</a></td>
                    <td><a href="index.php?page=size-update&id=<?php echo $size->id?>">Update</a></td>
                    <td><a onclick="return confirm('Are you sure ?')" href="index.php?page=size-delete&id=<?php echo $size->id?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="8">Chưa có size giày nào</td>
            </tr>
        <?php endif; ?>

        </tbody>
    </table>

</div>



