<a href="index.php?page=size-create">Create</a>

<table border="1">
    <thead>
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

