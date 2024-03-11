<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
  $description=$_POST['description';]
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['category_title'];
    $product_brand=$_POST['brand_title'];
    $product_price=$_POST['product_price'];
    // for imgs
    $product_img1=$_POST['product_img1']['name'];
    $product_img2=$_POST['product_img2']['name'];
    $product_img3=$_POST['product_img3']['name'];
   
   
    // img temp name
    $temp_img1=$_POST['product_img1']['temp_name'];
    $temp_img2=$_POST['product_img2']['temp_name'];
    $temp_img3=$_POST['product_img3']['temp_name'];

   //cheaking empty condition
    
   if($product_title==""||$description==""|| $product_keywords||$product_category==''||$product_brand==''||$product_price==''|| $product_img1==''|| $product_img2==''|| $product_img3==''){
    echo"<script>alert('please fill the all the field')</script>";
    exit();
   }
   else{
    move_upload_file($temp_img1,"./product_img/$product_img1");
    move_upload_file($temp_img2,"./product_img/$product_img2");
    move_upload_file($temp_img3,"./product_img/$product_img3");
    //insert query
    $insert_products="insert into `products(product_title,)`";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert_products-admin_dashboard</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- custom css file  -->
    <link rel="stylesheet" href="../stationary.css">
</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Product</h1>
        <!-- from -->
        <form action="" method="post" enctyp="multipath/form-date">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="from-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Enter product title" required="required">
            </div>

            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="from-label">Product description</label>
                <input type="text" name="product_description" id="product_description" class="form-control"
                    placeholder="Enter product description" required="required">
            </div>

            <!-- keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="from-label">Product keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control"
                    placeholder="Enter product keywords" required="required">
            </div>
            <!--  category select -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_categories" id="product_categories" class="form-select">
                    <option value="">select a category</option>
                    <?php
        $select_query = "SELECT * FROM `categories`";
        $result_query = mysqli_query($con, $select_query);

        while ($row = mysqli_fetch_assoc($result_query)) {
            $category_title = $row['category_title'];
            $category_id = $row['category_id'];
            echo "<option value='$category_id'>$category_title</option>";
        }
        ?>
                </select>
            </div>
    

    <!-- brands -->
    <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brand" id="product_brand" class="form-select">
                    <option value="">select a category</option>
                    <?php
        $select_query = "SELECT * FROM `brands`";
        $result_query = mysqli_query($con, $select_query);

        while ($row = mysqli_fetch_assoc($result_query)) {
            $brand_title = $row['brand_title'];
            $brand_id = $row['brand_id'];
            echo "<option value='$brand_id'>$brand_title</option>";
        }
        ?>
                </select>
            </div>

        <!-- img1 -->
        <div class="form-outline mb-4 w-50 m-auto ">
            <label for="product_img1" class="from-label">Product image 1</label>
            <input type="file" name="product_img1" id="product_img1" class="form-control" required="required">
        </div>
        <!-- img2 -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_img2" class="from-label">Product image 2</label>
            <input type="file" name="product_img2" id="product_img2" class="form-control" required="required">
        </div>
        <!-- img3 -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_img3" class="from-label">Product image 3</label>
            <input type="file" name="product_img3" id="product_img3" class="form-control" required="required">
        </div>

        <!-- price -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="from-label">Product price</label>
            <input type="text" name="product_price" id="product_price" class="form-control"
                placeholder="Enter product price" required="required">
        </div>
        <!-- price -->
        <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_produdut" class="btn btn-info" value="insert products">
        </div>
        </from>
   




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