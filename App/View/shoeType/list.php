<?php include "App/View/layout/layoutHome.php" ?>

<a href="index.php?page=shoeType-create">Create</a>

<table border="1">
    <thead>
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
                <td><a href="index.php?page=shoeType-update">Update</a></td>
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
