<?php include "App/View/layout/layoutHome.php " ?>


<div class="container mt-3">

    <table border="1">
        <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $shoeTypes->id ?></td>
            <td><?php echo $shoeTypes->name ?></td>

        </tr>
        </tbody>
    </table>
    <a href="index.php?page=shoeType-list" type="button" class="btn btn-primary mt-3">Back</a>

</div>