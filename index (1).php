<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- custom css file  -->
    <link rel="stylesheet" href="../stationary.css">
</head>
<style>
    .row{
        height:300px;
    }
.admin_img {
    height: 150px;
    width: 150px;
    object-fit: contain;
    border-radius: 10px;
}

.admin_name_photo {
    margin-left: 80px;
    height: 150px;
    width: 150px;
    object-fit: cover
}
.button{
    width: 100%;
    aline-item:center;
    justify-content: center;
   justify-content: center;
}

</style>

<body>

    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../logo/charusat_logo.png" alt="" class="logo"></a>
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!--  third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="admin_name_photo">
                    <a href=""><img src="utsav.jpg" alt="" class="admin_img"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button><a href="" class="navlink text-light bg-info my-1">Insert Product</a></button>
                    <button><a href="" class="navlink text-light bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="navlink text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="navlink text-light bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brands" class="navlink text-light bg-info my-1">Insert Brand</a></button>
                    <button><a href="" class="navlink text-light bg-info my-1">View Brand</a></button>
                    <button><a href="" class="navlink text-light bg-info my-1">All Order</a></button>
                    <button><a href="" class="navlink text-light bg-info my-1">All Payments</a></button>
                    <button><a href="" class="navlink text-light bg-info my-1">List Users</a></button>
                    <button><a href="" class="navlink text-light bg-info my-1">Log Out</a></button>
                </div>
            </div>
        </div>


        <!-- forth child -->
        <div class="container my-5">
        <?php 
if(isset($_GET['insert_category'])){
    include('insert_categories.php');
}
    if(isset($_GET['insert_brands'])){
        include('insert_brands.php');
    }
    

?>

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