<?php 
 include "classes/Product.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $products=new Products();
    $product=$products->getProductById($id);

    if(isset($_POST['id'])){
        $id=$_POST['id'];
        $cart=new Carts();
        $cartinstance=$cart->addingToCart($productid,$productname,$productprice);
    }
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
        <div class="my-1">
            <form action="cart.php?id=<?php echo $product['id'];?>">
                <input type="hidden" name="id" value="<?php echo $product['id'];?>">
                <label class="h6">Quantity:</label>
                <input type="number" name="quantity">
                <button name="cart" class="btn btn-secondary" type="submit">Add To Cart</button>
            </form>
        </div>
    </div>
</body>
</html>