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
    *{
        background-color: whitesmoke;
    }
</style>
<body>
    <?php include_once "components/navbar.php";?>
    <div class="container-fluid">
        <div class="content">
            <p class="h2 text-center text-light mb-2">VINTEDOUTFITS</p>
            <p class="h6 text-center text-light mt-2">Motto:: Giving You The Best Of Looks</p>
            <h3 class="mt-2">Welcome Extinguish User</h3>
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="mmm" src="assets/images/image.png" class="d-block " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="mmm" src="assets/images/logo.png" class="d-block " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="mmm" src="assets/images/image.png" class="d-block " alt="...">
                    </div>
                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
            </div>
        </div>
    </div>
</body>
</html>