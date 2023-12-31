<?php
class Carts{
    public function addingToCart($productid,$productname,$productprice){
        include "../config/dbconnect.php";
        $sql="INSERT INTO  cart (productid, itemname, itemprice, quantity) VALUES (?,?,?,1)";
        $stmt=$pdo->prepare($sql);
        $result=$stmt->execute([$productid,$productname,$productprice]);
        return $result;
    }

    public function getAllCartItems(){
        include "config/dbconnect.php";
        $sql="SELECT * FROM cart ORDER BY id DESC";
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCartItemById($productid){
        include "../config/dbconnect.php";
        $sql="SELECT FROM cart WHERE id=productid";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$productid]);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function upadteCart($id){
        include "config/dbconnect.php";
        $sql="UPDATE cart SET productid=productid,productname=productname,productprice=productprice,quantity=quantity+1 WHERE id=?";
        $stmt=$pdo->prepare($sql);
        $result=$stmt->execute([$id]);
        return $result;
    }

    public function deleteAllFromCart(){
        include "config/dbconnect.php";
        $sql="DELETE FROM cart";
        $stmt=$pdo->prepare($sql);
        $result=$stmt->execute();
        return $result;
    }

    public function removeFromCart($id){
        include "../config/dbconnect.php";
        $sql="DELETE FROM cart WHERE id=?";
        $stmt=$pdo->prepare($sql);
        $result=$stmt->execute([$id]);
        return $result;
    }

    public function placeOrder(){
        include "config/dbconnect.php";
        $sql="INSERT INTO orders (itemname,quantity,price,name,address) SELECT cart.itemname AS itemname,cart.itemprice AS itemprice,cart.quantity AS quantity,users.name AS name,users.address AS address FROM cart,users";
        $stmt=$pdo->prepare($sql);
        $result=$stmt->execute();
        return $result;
    }

    public function getAllOrders(){
        include "config/dbconnect.php";
        $sql="SELECT * FROM orders";
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function removeAllFromOrder(){
        include "config/dbconnect.php";
        $sql="DELETE FROM order";
        $stmt=$pdo->prepare($sql);
        $result=$stmt->execute();
        return $result;
    }

    
    public function totalPrice(){
        include "config/dbconnect.php";
        $sql="SELECT SUM(itemprice) FROM cart";
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function increaseQuantity($itemprice,$id){
        include "../config/dbconnect.php";
        $sql="UPDATE cart SET itemprice=itemprice+?,quantity=quantity+1 WHERE id=?";
        $stmt=$pdo->prepare($sql);
        $result=$stmt->execute([$itemprice,$id]);
        return $result;
    }

    public function reduceQuantity($itemprice,$id){
        include "../config/dbconnect.php";
        $sql="UPDATE cart SET itemprice=itemprice-?,quantity=quantity-1 WHERE id=?";
        $stmt=$pdo->prepare($sql);
        $result=$stmt->execute([$itemprice,$id]);
        return $result;
    }
    public function createUser($name,$address){
        include "config/dbconnect.php";
        $sql = "INSERT INTO users (name,address) VALUES (?,?)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$name,$address]);
        return $result;
    }
}
?>