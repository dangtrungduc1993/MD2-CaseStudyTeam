<?php include "App/View/layout/layoutHome.php"; ?>
<div class="container mt-3">

    <form action="" method="post">
        <input type="text" name="size" value="<?php echo $data->size ?>">
        <button>Update</button>
    </form>

    <a type="button" class="btn btn-primary mt-3" href="index.php?page=size-list">Back</a>
</div>