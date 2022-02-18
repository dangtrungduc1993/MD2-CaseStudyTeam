<table>
    <thead>
    <tr>
        <th>ID</th>
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
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product->id ?></td>
                <td><?php echo $product->name ?></td>
                <td><?php echo $product->image ?></td>
                <td><?php echo $product->price ?></td>
                <td><?php echo $product->quantity ?></td>
                <td><?php echo $product->content ?></td>
                <td><?php echo $product->shoeType_id ?></td>
                <td><?php echo $product->brand_id ?></td>
                <td><?php echo $product->size_id ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">Chưa có sản phẩm nào</td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>
