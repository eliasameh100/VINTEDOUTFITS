<?php
if(isset($_GET['id'])){
    include "../classes/Cart.php";
    $id=$_GET['id'];
    $cart=new Carts();
    $product=$cart->getCartItemById($id);
    $quantityprice=$product['itemprice'];
    if($quantityprice > $ $product){
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