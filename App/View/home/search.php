<?php include "App/View/layout/layoutHome.php" ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="card-deck">
        <div class="row ">
            <?php foreach ($search as $customer): ?>
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
        </div>
    </div>

</div>