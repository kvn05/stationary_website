<!-- connect file -->
<?php
include('includes/connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stationary.css">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="logo/charusat_logo.png" alt="" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <form class="d-flex">
                    <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-regular fa-user fa-lg"></i> Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping fa-lg"></i> Cart</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- second child -->
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">login</a>
                </li>
            </ul>
        </nav>
        <!-- hero section -->
        <div class="hero">
            <img src="https://scooboo.in/cdn/shop/files/IMG_5613.jpg?v=1709231359&width=1920" alt="">
        </div>
        <!-- third child -->
        <div class="bg-light text-center">
            <h3 class="text-cent">Hidden Store</h3>
            <p>communication is at the heart of e commerce and community</p>
        </div>
        <!-- forth child -->
        <div class="row">
            <div class="col-md-10">
                <!-- products -->
                <div class="row">
                    <div class="col-md-4 p-0 mb-80">
                        <div class="card" style="width: 18rem;">
                            <img src="https://scooboo.in/cdn/shop/products/kaco-k8-gel-pen-solid-pack-of-10-gel-pens-scooboo-955577.jpg?v=1702359208&width=360" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">ADD TO CART</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-0 mb-80">
                        <div class="card" style="width: 18rem;">
                            <img src="https://scooboo.in/cdn/shop/products/kaco-pure-gel-pens-07mm-pack-of-10gel-penkacoscooboo-578063.jpg?v=1660397668&width=360" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">ADD TO CART</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-0 mb-80">
                        <div class="card" style="width: 18rem;">
                            <img src="https://scooboo.in/cdn/shop/products/kaco-love-gel-pen-set-05mm-gel-pens-scooboo-922897.jpg?v=1677794240&width=360" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">ADD TO CART</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-0 mb-80">
                        <div class="card" style="width: 18rem;">
                            <img src="https://scooboo.in/cdn/shop/products/kaco-love-gel-pen-set-05mm-gel-pens-scooboo-922897.jpg?v=1677794240&width=360" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">ADD TO CART</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-0 mb-80">
                        <div class="card" style="width: 18rem;">
                            <img src="https://scooboo.in/cdn/shop/products/kaco-love-gel-pen-set-05mm-gel-pens-scooboo-922897.jpg?v=1677794240&width=360" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">ADD TO CART</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-0 mb-80">
                        <div class="card" style="width: 18rem;">
                            <img src="https://scooboo.in/cdn/shop/products/kaco-love-gel-pen-set-05mm-gel-pens-scooboo-922897.jpg?v=1677794240&width=360" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">ADD TO CART</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 bg-secondary p-0 ">
                <!-- sidenav -->
                <ul class="navbar-nav me-auto text-center ">
                    <li class=" nav-item bg-info ">
                        <a href="#" class="nav-links text-light text-decoration-none"><h4 >Delivery Brand</h4></a>
                    </li>
                    <?php 
                    $select_brands="Select * from `brands`";
                    $result_brands=mysqli_query($con,$select_brands);
                    while($row_data=mysqli_fetch_assoc($result_brands)){
                    $brand_title=$row_data['brand_title'];
                    $brand_id=$row_data['brand_id'];
                    echo"<li clas='nav-item'>
                    <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                    </li>";
                   
}
                    ?>
                    </ul>
                <!-- catagories -->
                <ul class="navbar-nav me-auto text-center ">
                <li class=" nav-item bg-info ">
                        <a href="#" class="nav-links text-light text-decoration-none"><h4 >Categories</h4></a>
                    </li>
                    <?php 
                    $select_categories="Select * from `categories`";
                    $result_categories=mysqli_query($con,$select_categories);
                    while($row_data=mysqli_fetch_assoc($result_categories)){
                    $category_title=$row_data['category_title'];
                    $category_id=$row_data['category_id'];
                    echo"<li clas='nav-item'>
                    <a href='index.php?brand=$category_id' class='nav-link text-light'>$category_title</a>
                    </li>";
                   
}
                    ?>
                </ul>
                
            </div>
        </div>
        <!-- last child -->
        <div class="bg-info p-3 text-center text-white rounded">
            <p>ALL RIGHTS ARE RESERVED c DESIGENED BY UTSAV-2024</p>
        </div>
    </div>

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>