<?php
class User{
    public function createUser($name,$address){
        include "../config/db-connect.php";
        $sql = "INSERT INTO users (name,address) VALUES (?,?)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$name,$address]);
        return $result;
    }
}
?>