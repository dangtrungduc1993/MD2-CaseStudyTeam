<?php include "App/View/layout/layoutHome.php" ?>

<div class="container mt-3">
<table border="1">
    <thead>
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
                <td><a href="index.php?page=customer-detail&id=<?php echo $customer->id?>">Detail</a></td>

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
