<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Image</th>
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
        <td><?php echo $products->id ?></td>
        <td><?php echo $products->Name ?></td>
        <td><?php echo $products->image ?></td>
        <td><?php echo $products->price ?></td>
        <td><?php echo $products->quantity ?></td>
        <td><?php echo $products->content ?></td>
        <td><?php echo $products->Type ?></td>
        <td><?php echo $products->Brand ?></td>
        <td><?php echo $products->Sizes ?></td>
    </tr>
    </tbody>
</table>
