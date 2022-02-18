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
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $key => $product): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $product->Name ?></td>
                <td><?php echo $product->image ?></td>
                <td><?php echo $product->price ?></td>
                <td><?php echo $product->quantity ?></td>
                <td><?php echo $product->content ?></td>
                <td><?php echo $product->Type ?></td>
                <td><?php echo $product->Brand ?></td>
                <td><?php echo $product->Sizes ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">Chưa có sản phẩm nào</td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>
