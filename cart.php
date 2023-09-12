<?php
session_start();
include "classes/Cart.php";
$cart=new Carts();
$item=$cart->getAllCartItems();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
    <title>Cart</title>
</head>
<body>
    <?php include "components/navbar.php" ?>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>PRODUCTID</th>
            <th>PRODUCTNAME</th>
            <th>PRODUCTPRICE</th>
            <th>PRODUCTQUANTITY</th>
            <th>OPERATIONS</th>
        </tr>
        <?php foreach ($item as $items){?>
        <tr>
            <td><?php echo $items['id'];?></td>
            <td><?php echo $items['productid'];?></td>
            <td><?php echo $items['productname'];?></td>
            <td><?php echo '$'.$items['productprice'];?></td>
            <td><?php echo $items['quantity'];?></td>
            <td>
                <a href="processes/deletecart.php?id=<?php echo $items['id'];?>" class="btn btn-dark">Remove</a>
                <a href="#" class="btn btn-info">Edit</a>
            </td>
        </tr>
        <?php }?>
    </table>
            <form action="processes/order.php">
                <div class="container my-4">
                    <button name="order" class="btn btn-secondary">Place Order</button>
                </div>
            </form>
</body>
</html>