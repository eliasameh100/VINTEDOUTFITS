<?php
include "../classes/Cart.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $orders=new Carts();
    $orders->placeOrder();
    $item=$orders->removeFromCart($id);
    header('location:../components/Form.php');
}
?>