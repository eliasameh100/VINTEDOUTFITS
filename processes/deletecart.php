<?php
if(isset($_GET['id'])){
    include "../classes/Cart.php";
    $id=$_GET['id'];
    $cart=new Carts();
    $post=$cart->removeFromCart($id);
    header('location:../cart.php');
}
?>