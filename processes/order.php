<?php
session_start();
include "../classes/Cart.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $itemname=$_SESSION['itemname'];
    $itemprice=$_SESSION['itemprice'];
    $orders=new Carts();
    $orders->placeOrder($itemname,$itemprice);
    $item=$orders->removeFromCart($id);
    header('location:../register.php');
}
?>