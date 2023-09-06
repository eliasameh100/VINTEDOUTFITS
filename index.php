<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<style>
    .mmm{
        width: 100%;
        height: 30rem;
    }
    
</style>
<body>
    <?php include_once "components/navbar.php";?>
    <div class="container-fluid">
        <div class="content">
            <p class="text-light h2 text-center mb-2">VINTEDOUTFITS</p>
            <p class="text-light h6 text-center mt-2">Motto:: Giving You The Best Of Looks</p>
            <h3 class="text-light mt-2">Welcome Extinguish User</h3>
        </div>
        <?php include_once "components/cards.php"?>
    </div>
</body>
</html>