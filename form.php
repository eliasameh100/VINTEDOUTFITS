<?php
session_start();
if(isset($_POST['orders'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $add=new Carts();
    $addinstance=$add->placeOrder($name,$address);
}
?>


<html lang="en">
<head>
    <title>Orders</title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
</head>
<body>
<?php include "components/navbar.php";?>
    <?php include "components/Form.php"?>
</body>
</html>