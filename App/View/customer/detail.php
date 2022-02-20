<?php include "App/View/layout/layoutHome.php" ?>

<div class="container">
    <table border="1">
        <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $customers->id ?></td>
            <td><?php echo $customers->name ?></td>
            <td><?php echo $customers->email ?></td>
            <td><?php echo $customers->password ?></td>

        </tr>
        </tbody>
    </table>
</div>
