<?php include "App/View/layout/layoutHome.php" ?>
<div class="container">
<form action="" method="post">
    <input type="text" name="name" value="<?php echo $data->name?>">
    <button>Update</button>
</form>
    <a type="button" class="btn btn-primary mt-3" href="index.php?page=shoeType-list">Back</a>
</div>
