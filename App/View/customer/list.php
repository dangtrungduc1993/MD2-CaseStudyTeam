<?php include "App/View/layout/layoutHome.php" ?>

<div class="container mt-3">
    <div>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=product-list">Show list Product</a>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=shoeType-list">Show list Shoe Type</a>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=brand-list">Show list Brand</a>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=size-list">Show list Size</a>
    </div>
    <a type="button" class="btn btn-primary mb-4" href="index.php?page=customer-list">Show list Customer</a>
    <table style="background-color: #ffffff ; color: #000000" class="table table-bordered table-dark">
        <thead style="text-align: center">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($customers)): ?>
            <?php foreach ($customers as $key => $customer): ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $customer->name ?></td>
                    <td><a href="index.php?page=customer-detail&id=<?php echo $customer->id ?>">Detail</a></td>

                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="8">Chưa có khách hàng nào</td>
            </tr>
        <?php endif; ?>

        </tbody>
    </table>
</div>
