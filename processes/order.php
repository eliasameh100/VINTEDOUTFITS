<?php
include "../classes/Cart.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $orders=new Carts();
    $orders->placeOrder();
    $item=$orders->removeFromCart($id);

    if(isset($_POST['pay'])){
        $_account=$_POST['account'];
        $account=new Carts();
        $accountinstance=$account->payment($account);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input name="account" type="text" placeholder="Account Number" class="form-control">
        <button name="pay" class="btn btn-primary text-center">Pay</button>
    </form>
</body>
</html>