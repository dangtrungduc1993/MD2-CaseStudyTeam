<a href="index.php?page=admin-create">Create</a>

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
    <?php if (!empty($admins)): ?>
        <?php foreach ($admins as $key => $admin): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $admin->name ?></td>
                <td><?php echo $admin->email ?></td>
                <td><?php echo $admin->password ?></td>
                <td><a href="index.php?page=admin-detail&id=<?php echo $admin->id?>">Detail</a></td>
                <td><a href="index.php?page=admin-update&id=<?php echo $admin->id?>">Update</a></td>
                <td><a onclick="return confirm('Are you sure ?')" href="index.php?page=admin-delete&id=<?php echo $admin->id?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">Chưa có admin nào</td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>

