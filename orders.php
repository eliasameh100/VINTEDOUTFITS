<?php
// if(!isset($_SESSION['name'])){
//     header('location:register.php');
// }
include "classes/Cart.php";
$cart=new Carts();
$cartinstance=$cart->getAllOrders();
?>

<html>
    <head>
        <title>Order</title>
        <link rel="stylesheet" href="assets/css/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
    </head>

    <body>
        <?php include "components/navbar.php";?>
        <table class="table my-6">
            <tr>
                <th>id</th>
                <th>productid</th>
                <th>productname</th>
                <th>quantity</th>
                <th>price</th>
            </tr>
            <?php foreach($cartinstance as $cart){?>
            <tr>
                <td><?php echo $cart['id'];?></td>
                <td><?php echo $cart['itemname'];?></td>
                <td><?php echo $cart['price'];?></td>
                <td><?php echo $cart['quantity'];?></td>
                <td><?php echo $cart['date'];?></td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>
