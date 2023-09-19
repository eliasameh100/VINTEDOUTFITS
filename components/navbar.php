<?php

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>NavBar</title>
</head>
<style>
    .bbb{
        width: 7rem;
        height: 4rem;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 shadow-lg">
  <img class="bbb" src="assets/images/logo.png" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><img src="assets/images/cart.png" alt="" style="width: 30px; height: 30px;"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="orders.php">Order</a>
      </li>
    </ul>
  </div>
  <script src="assets/css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</nav>
            <!-- <hr>
            <p class="text-center copyright">Copyright 2023 - my first e-commerce Design</p> -->