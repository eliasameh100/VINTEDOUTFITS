<?php
if(isset($_GET['id'])){
    include "../classes/Cart.php";
    $id=$_GET['id'];
    $productid=$_SESSION['id'];
    $itemprice=$_SESSION['itemprice'];
    $cart=new Carts();
    $product=$cart->getCartItemById($productid);
    $quantityprice=$product['itemprice'];
    if($quantityprice > $ $itemprice){
        $reduce=$cart->reduceQuantity($itemprice,$id);
        if($reduce){
            $_SESSION['success']="Added Successfully";
            header("location:../cart.php");
            exit();
        }
    }else{
        $result=$cart->removeFromCart($id);
        if($result){
            $_SESSION['success']="Removed Successfully";
            header("location:../cart.php");
            exit();
        }else{
            $_SESSION['error']="Error Removing";
            header("location:../cart.php");
            exit();
        }
    }
}
?>