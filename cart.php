<?php
session_start();
include "classes/Cart.php";
$cart=new Carts();
$cart_ins=$cart->getAllCartItems();
$order=$cart->getAllOrders();
$clear=$cart->removeAllFromOrder();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
</head>
<body>
    <?php include "components/navbar.php";?>
        <div class="alert alert-success">
             <?php
                    if(isset($_SESSION['success'])){
                        echo $_SESSION['success'];
                        unset ($_SESSION['success']);
                    }
                    if(isset($_SESSION['error'])){
                        echo $_SESSION['error'];
                        unset ($_SESSION['error']);
                    }
            ?>
        </div>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>PRODUCTID</th>
            <th>NAME</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
        </tr>
        <?php foreach($cart_ins as $item){?>
        <tr>
            <td><?php echo $item['id'];?></td>
            <td><?php echo $item['productid'];?></td>
            <td><?php echo $item['itemname'];?></td>
            <td><?php echo $item['quantity'];?></td>
            <td><?php echo '$'.$item['itemprice'];?></td>
            <td>
                <a class="btn btn-success btn-sm" href="processes/update.php?id=<?php echo $item['id'];?>">+</a>
                <a class="btn btn-danger btn-sm" href="processes/deletecart.php?id=<?php echo $item['id'];?>">-</a>
            </td>
        </tr>
        <?php }?>
    </table>
    <div class="text-end">
        <h5>Total Price<br><p>$<?php echo implode($cart->totalPrice());?></p></h5>
    </div>
    <a class="btn btn-secondary" href="processes/order.php">Place Order</a>
</body>
</html>