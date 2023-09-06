<?php
include "classes/Product.php";
$items=new Products();
$itemInstance=$items->getAllProducts();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
</head>
<body>
    <?php include_once "components/navbar.php";?>
    <h2 class="text-center">Our Products</h2>
    <div class="container mt-3">
        <div class="row">
            <?php foreach($itemInstance as $itm){?>
                <div class="col-md-4 mt-5">
                    <div class="card text-center shadow-sm h-100 w-100">
                    <div class="card-body">
                        <?php echo '<img src="uploads/'.$itm['productimages'].'" alt="">';?>
                        <h3><?php echo $itm['productname']?></h3>
                        <h5 class="text-truncate"><?php echo $itm['productdescription']?></h5>
                        <p class=""><?php echo '$'.$itm['productprice'];?></p>
                        <a class="btn btn-success" href="product.php?id=<?php echo $itm['id']?>">Read More</a>
                    </div>
                    </div>
                </div>
                <?php
            }?>
        </div>
    </div>
</body>
</html>