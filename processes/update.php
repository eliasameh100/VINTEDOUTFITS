<?php
session_start();
include "../classes/Cart.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $itemprice=$_SESSION['itemprice'];
    $cart_Instance=new Carts();
    $result=$cart_Instance->increaseQuantity($itemprice,$id);
    if(!$result){
        $_SESSION['error']="Something Is Wrong";
        header("location:../cart.php");
        exit();
    }else{
        $_SESSION['success']="Updated Successfully"
        header("location:../cart.php")
        exit();
    }
}
?>