<?php 
if(isset($_GET['id'])){
    include "classes/Product.php";
    $id=$_GET['id'];
    $products=new Products();
    $product=$products->getProductById($id);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
</head>
<body>
    <?php
        include "components/navbar.php";
     ?>
    <div class=" text-center container">
    <?php echo '<img src="uploads/'.$product['productimages'].'" alt="">';?>
        <h3><?php echo $product['productname'];?></h3>
        <h5><?php echo $product['productdescription'];?></h5>
        <h6><?php echo '$'.$product['productprice'];?></h6>
        <div class="d-flex gap-1" style="justify-content:center">
            <button class="btn btn-secondary" type="button">Add To Cart</button>
            <button class="btn btn-dark" type="button">Remove From Cart</button>
        </div>
    </div>
</body>
</html>