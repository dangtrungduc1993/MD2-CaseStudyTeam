<a href="index.php?page=customer-create">Create</a>

<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($customers)): ?>
        <?php foreach ($customers as $key => $customer): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $customer->name ?></td>
                <td><?php echo $customer->email ?></td>
                <td><?php echo $customer->password ?></td>
                <td><a href="index.php?page=customer-detail&id=<?php echo $customer->id?>">Detail</a></td>
                <td><a href="index.php?page=customer-update&id=<?php echo $customer->id?>">Update</a></td>
                <td><a onclick="return confirm('Are you sure ?')" href="index.php?page=customer-delete&id=<?php echo $customer->id?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">Chưa có khách hàng nào</td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>

