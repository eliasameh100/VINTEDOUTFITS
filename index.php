<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
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
    <h1 class="text-center">Our Sponsors</h1>
    <section id="brand" class="container">
        <div class="row-sm my-4">
            <img src="assets/images/adidas.png" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="assets/images/Amazon.png" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="assets/images/Puma.jpg" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">
        </div>
    </section>
</body>
</html>