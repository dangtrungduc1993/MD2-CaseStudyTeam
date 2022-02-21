<?php include "App/View/layout/layoutHome.php"; ?>

<div class="container mt-3">
    <form action="" method="post">
        <input type="text" name="name" value="<?php echo $data->name ?>">
        <button>Update</button>
    </form>
    <a type="button" class="btn btn-primary" href="index.php?page=brand-list">Back</a>
</div>
