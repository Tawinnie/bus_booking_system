<?php

include '../controllers/cart_controller.php';
// check if button is clicked
if(isset($_POST["manage_cart"])){
    // grab form data
    $ip_address= $_POST["ip"];
    $product_id = $_POST["product_id"];
    $customer_id = $_POST["customer_id"];
    $product_id = $_POST["product_id"];
    $qty = $_POST["quantity"];
//db insertion

    $result = update_cart_ctrl($product_id,$customer_id,$qty);
    if ($result) {
        // session_start();
        // $_SESSION["brand_upt"] = true;
        header("location: ../view/cart.php");
    } else {
        echo "Sorry failed to update";
    }
}

?>