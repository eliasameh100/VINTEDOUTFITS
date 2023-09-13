<?php
session_start(); 
 include "classes/Product.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $products=new Products();
    $product=$products->getProductById($id);
    $_SESSION['itemname']=$product['productname'];
    $_SESSION['itemprice']=$product['productprice'];
}
// if(isset($_POST['quantity'])){
//     $quantity=$_POST['quantity'];
//     $sql="INSERT INTO cart WHERE quantity=$quantity";
//     $stmt=$pdo->prepare($sql);
//     $result=$stmt->execute([$quantity]);
// }
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
     <?php
        if(isset($_SESSION['error']))
        ?>
    <div class=" text-center container">
    <?php echo '<img src="uploads/'.$product['productimages'].'" alt="">';?>
        <h3><?php echo $product['productname'];?></h3>
        <h5><?php echo $product['productdescription'];?></h5>
        <h6><?php echo '$'.$product['productprice'];?></h6>
        <form method="Get">
            <input type="number" name="quantity" value="1" size="2">
        </form>
        <a href="processes/addcart.php?id=<?php echo $product['id']?>" class="btn btn-secondary">Add To Cart</a>
        <!-- <div class="my-1">
            <form action="cart.php?id=<?php echo $product['id'];?>" method="Get">
                <input type="hidden" name="id" value="<?php echo $product['id'];?>">
                <label class="h6">Quantity:</label>
                <div class="cart-action">
                </div>
             <a href="processes/addcart.php" name="cart" class="btn btn-secondary" type="submit">Add To Cart</a>   
            </form>
        </div> -->
    </div>
</body>
</html>