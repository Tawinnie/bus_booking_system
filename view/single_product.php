<?php
session_start();
include("../controllers/product_controller.php");
$product = selectoneproduct_ctr($_GET["pid"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2><?php echo $product["product_title"] ?></h2>
    <p>Price: <?php echo $product["product_price"] ?></p>
    <p>Brand: <?php echo $product["product_brand"] ?></p>
    <p>Category: <?php echo $product["product_cat"] ?></p>
    <p>Description: <?php echo $product["product_desc"] ?></p>
    <p>Keywords: <?php echo $product["product_keywords"] ?></p>
    <form class="form-inline" method="POST" action="../actions/add_to_cart.php">
        <input class="form-control mr-sm-2" type="hidden" value="<?php echo $ip_address ?>" name="ip">
        <input class="form-control mr-sm-2" type="hidden" value="<?php echo $_SESSION["customer_id"] ?>" name="customer_id">
        <input class="form-control mr-sm-2" type="hidden" name="product_id" value="<?php echo $product["product_id"] ?>">
        <input class="form-control mr-sm-2" name="quantity" type="number" placeholder="Quantity" aria-label="Quantity">
        <input type="submit" name="add_to_cart" value="Book This Service">
    </form>
</body>

</html>