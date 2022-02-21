<?php include "App/View/layout/layoutHome.php"; ?>

<div class="container mt-3">
    <table style="background-color: #ffffff ; color: #000000" class="table table-bordered table-dark">
        <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $brands->id ?></td>
            <td><?php echo $brands->name ?></td>

        </tr>
        </tbody>
    </table>
    <a type="button" class="btn btn-primary" href="index.php?page=brand-list">Back</a>
</div>