<?php include "App/View/layout/layoutHome.php" ?>

<div class="container mt-3">
    <div class="card-deck">
<!--        <div class="row ">-->
            <?php foreach ($customers as $customer): ?>
                <div class="col-3 mt-3">
                    <div class="card h-100">
                        <img src="<?php echo $customer->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $customer->name ?></h5>
                            <p class="card-text"><?php echo $customer->price ?></p>
                        </div>
                        <div class="mb-3 ml-4">
                            <a type="button" class="btn btn-light" href="index.php?page=home-detail&id=<?php echo $customer->id?>">Chi Tiết</a>
                            <a type="button" class="btn btn-light" href="">Mua</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
<!--        </div>-->
    </div>

</div>