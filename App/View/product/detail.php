<?php include "App/View/layout/layoutHome.php" ?>
<div class="container mt-3">
    <a type="button" class="btn btn-primary" href="index.php?page=product-list">Back</a>
<table style="background-color: #9ca5b4 ; color: #000000" class="table table-bordered table-dark mt-3">
    <thead>
    <tr>
<!--        <th>STT</th>-->
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Content</th>
        <th>Type</th>
        <th>Brand</th>
        <th>Size</th>
    </tr>
    </thead>
    <tbody>
    <tr>
<!--        <td>--><?php //echo $products->id ?><!--</td>-->
        <td><img width="100px" src="<?php echo $products->image ?>" alt=""></td>
        <td><?php echo $products->Name ?></td>
        <td><?php echo $products->price ?></td>
        <td><?php echo $products->quantity ?></td>
        <td><?php echo $products->content ?></td>
        <td><?php echo $products->Type ?></td>
        <td><?php echo $products->Brand ?></td>
        <td><?php echo $products->Sizes ?></td>
    </tr>
    </tbody>
</table>
</div>