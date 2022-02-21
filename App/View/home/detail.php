<?php include "App/View/layout/layoutHome.php"
?>
<div class="container mt-3">
    <div class="card mb-3" style="max-width: 70%">
        <div class="row no-gutters">
            <div class="col-md-6">
                <img width="300px" style="margin: 4px" src="<?php echo $customers->image ?>" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $customers->Name ?></h5>
                    <p class="card-text"><?php echo $customers->price ?></p>
                    <p class="card-text"><?php echo $customers->quantity ?></p>
                    <p class="card-text"><?php echo $customers->content ?></p>
                    <p class="card-text"><?php echo $customers->Type ?></p>
                    <p class="card-text"><?php echo $customers->Brand ?></p>
                    <p class="card-text"><?php echo $customers->Sizes ?></p>
                    <!--                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
                    <!--                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                </div>
            </div>
        </div>
    </div>
</div>