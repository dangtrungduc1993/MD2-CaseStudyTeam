<?php include "App/View/layout/layoutHome.php"; ?>
<div class="container mt-3">
    <table border="1">
        <thead>
        <tr>
            <th>STT</th>
            <th>Size</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $sizes->id ?></td>
            <td><?php echo $sizes->size ?></td>

        </tr>
        </tbody>
    </table>

    <a type="button" class="btn btn-primary mt-3" href="index.php?page=size-list">Back</a>
</div>