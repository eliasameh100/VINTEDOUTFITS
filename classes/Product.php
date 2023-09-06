<?php
class Products{

    //getting all products from data base
    public function getAllProducts(){
        include "config/dbconnect.php";
        $sql="SELECT * FROM `products`";
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    //getting products by id
    public function getProductById($id){
        include "config/dbconnect.php";
        $sql="SELECT * FROM products WHERE id=?";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$id]);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>