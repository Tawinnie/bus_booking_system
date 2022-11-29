<?php
include "../controllers/cart_controller.php";
// check if button is clicked
if(isset($_POST['add_to_cart'])){
    // grab form data
    $ip_address = $_POST['ip'];
    $customer_id = $_POST['customer_id'];
    $product_id = $_POST['product_id'];
    $qty = $_POST['quantity'];

    if ($qty == null) {
      $qty = 1;
    }

    $check_duplicate = viewcart_ctrl($product_id,$customer_id);
    if ($check_duplicate == false)
        insert_into_cart_ctrl($product_id, $ip_address, $customer_id, $qty);
    else {
        $qty = $qty + $check_duplicate["qty"];
        update_cart_ctrl($product_id, $customer_id, $qty);
    }
    header("location: ../view/all_products.php");
    
}


?>