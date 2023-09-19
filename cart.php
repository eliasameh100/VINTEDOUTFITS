<?php
session_start();
include "classes/Cart.php";
$cart=new Carts();
$cart_ins=$cart->getAllCartItems();
$order=$cart->getAllOrders();
$clear=$cart->removeAllFromOrder();
?>

<html>
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
        <div class="allcart">
            <table class="table my-6">
                <tr>
                    <!-- <th>ID</th>
                    <th>PRODUCTID</th>
                    <th>NAME</th>
                    <th>QUANTITY</th>
                    <th>PRICE</th> -->
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
                        <a class="btn btn-dark btn-sm" href="processes/deletecart.php?id=<?php echo $item['id'];?>">-</a>
                    </td>
                </tr>
                <?php }?>
            </table>
        </div>
        <div class="text-end">
        <h5>Total Price<br><p>$<?php echo implode($cart->totalPrice());?></p></h5>
    </div>
    <a class="btn btn-secondary" href="register.php">Place Order</a>
    <a class="btn btn-danger" href="">Delete Cart</a>
    <script src="assets/js/script.js"></script>
</body>
</html>