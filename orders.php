<?php
if(!isset($_SESSION['name'])){
    header('location:register.php');
}
?>

<html>
    <head>
        <title>Order</title>
        <link rel="stylesheet" href="assets/css/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
    </head>

    <body>
        <table class="table my-6">
            <tr>
                <th>id</th>
                <th>productid</th>
                <th>productname</th>
                <th>quantity</th>
                <th>price</th>
            </tr>
                
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </body>
</html>
