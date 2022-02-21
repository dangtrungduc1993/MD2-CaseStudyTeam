<?php
if (!isset($_SESSION["admin"])) {
    header("location:index.php?page=login");
}
?>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="index.php?page=home"><img width="100px" src="img/lusstore-removebg-preview.png"
                                                                alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-expanded="false">
                        Men
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?page=product-list">Sneaker</a>
                        <a class="dropdown-item" href="index.php?page=shoeType-list">Run</a>
                        <a class="dropdown-item" href="#">Practice</a>
                        <!--                    <div class="dropdown-divider"></div>-->
                        <!--                    <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-expanded="false">
                        Women
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Sneaker</a>
                        <a class="dropdown-item" href="#">Run</a>
                        <!--                    <div class="dropdown-divider"></div>-->
                        <a class="dropdown-item" href="#">Practice</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-expanded="false">
                        Brand
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Adidas</a>
                        <a class="dropdown-item" href="#">Nike</a>
                        <!--                    <div class="dropdown-divider"></div>-->
                        <a class="dropdown-item" href="#">Vans</a>
                        <a class="dropdown-item" href="#">Converse</a>
                    </div>
                </li>
                <li class="nav-item">
                    <!--                    <a class="nav-link disabled">Disabled</a>-->
                </li>
            </ul>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    <?php echo $_SESSION["admin"]->name ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="index.php?page=admin">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php?page=logout">Logout</a>
                </div>
            </div>
        </div>
    </nav>
</div>