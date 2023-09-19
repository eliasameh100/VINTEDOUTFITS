<?php
session_start();
// if(!isset($_SESSION['name'])){
//     header('location:index.php');
// }
include "classes/Cart.php";
if(isset($_POST['buy'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $insert=new Carts();
    $inserinstance=$insert->createUser($name,$address);
    header('location:index.php');
    exit();
}

?>

<html>
    <head>
        <title>Order</title>
        <link rel="stylesheet" href="assets/css/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
    </head>
    <body>
        <?php include "components/navbar.php";?>
        <center>
            <div class="container">
                <div class="card w-50">
                    <div class="card-header">
                        <h6 class="text-center h4">Place Order</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="container mt-3">
                                <input required type="text" name="name" placeholder="Enter Your Name" class="form-control">
                                <input required type="text" name="address" placeholder="House Address" class="form-control">
                                <button class="btn btn-primary" name="buy">Place Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
      </center>
    </body>
</html>