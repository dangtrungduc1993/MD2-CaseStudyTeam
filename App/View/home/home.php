<?php include "App/View/layout/layoutHome.php" ?>
<div class="container mt-2">
    <!--    <div class="row row-cols-4">-->
    <!--        --><?php //foreach ($customers as $customer): ?>
    <!--        <div class="col mt-4">-->
    <!--            <div class="card" style="width: 200px">-->
    <!--                <img src="--><?php //echo $customer->image ?><!--"  alt="...">-->
    <!--                <div class="card-body">-->
    <!--                    <p class="card-text">--><?php //echo $customer->name ?><!--</p>-->
    <!--                    <p class="card-text">--><?php //echo $customer->price ?><!--</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    --><?php //endforeach; ?>
    <!--    </div>-->

    <div class="card-deck">
        <div class="row ">
            <?php foreach ($customers as $customer): ?>
                <div class="col-3 mt-3">
                    <div class="card h-100">
                        <img src="<?php echo $customer->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $customer->name ?></h5>
                            <p class="card-text"><?php echo $customer->price ?></p>
                        </div>
                        <div class="mb-3 ml-4">
                            <a type="button" class="btn btn-light" href="">Chi Tiết</a>
                            <a type="button" class="btn btn-light" href="">Mua</a>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>