<?php
//connect to the cart class
include "../classes/cart_class.php";

//function to insert into cart
function insert_into_cart_ctrl($product_id,$ip,$customer_id,$quantity){
  $newdata = new Cart();
   return $newdata->insert_into_cart($product_id,$ip,$customer_id,$quantity);
}

//function to view car
function viewcart_ctrl($product_id,$customer_id){
    $newdata = new Cart();
     return $newdata->view_cart_class($product_id,$customer_id);
}
//view your cart
function view_your_cart_ctrl($customer_id){
    $newdata = new Cart();
     return $newdata->view_your_cart($customer_id);
}
//view your cart
function view_your_items_ctrl($customer_id){
    $newdata = new Cart();
     return $newdata->view_your_items($customer_id);
}
//function to remove from cart
function remove_from_cart_ctrl($product_id,$customer_id){
    $newdata = new Cart();
     return $newdata->remove_from_cart($product_id,$customer_id);
}
//function to update quantity of items in the cart
function update_cart_ctrl($product_id,$customer_id,$quantity){
    $newdata = new Cart();
     return $newdata->update_cart_items($product_id,$customer_id,$quantity);
}

?>