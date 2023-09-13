<?php
session_start();
include "../classes/Cart.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $productid=$id;
    $itemname = $_SESSION['itemname'];
    $itemprice=$_SESSION['itemprice'];
    $cart_Instance=new Carts();
    $add = $cart_Instance->addingToCart($productid,$itemname,$itemprice);
        if($add){
            $_SESSION['success']="successful";
            header("Location: ../cart.php");
        }else{
            $_SESSION['error']="not success";
        }
    // $result=$cart_Instance->getCartItemById($productid);
    // $cartproductid=$result['productid'];
    // if($productid === $cartproductid){
    //     $_SESSION['error']="Already added";
    // }else{
    //     $add=$cart_Instance->addingToCart($productid,$productname,$productprice);
    //     if($add){
    //         $_SESSION['success']="successful";
    //     }else{
    //         $_SESSION['error']="not success";
    //     }
    // }
}
?>