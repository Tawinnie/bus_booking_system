<?php

require ('../settings/db_class.php');

class Cart extends db_connection{
    //add, edit, delete

    //add to cart
    function insert_into_cart($product_id,$ip,$customer_id,$quantity){
        $sql= "INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$product_id','$ip','$customer_id','$quantity')";
        return $this->db_query($sql);
     }
     // view cart
     function view_cart_items ($product_id,$customer_id){
        $sql= "SELECT * FROM `cart` WHERE `p_id`='$product_id' AND `c_id` = '$customer_id'";
        return $this->db_fetch_one($sql);
     }
     //update cart by increasing or reducing quantity
     function update_cart_items($product_id,$customer_id,$quantity) {
        $sql= "UPDATE `cart` SET `qty` = '$quantity' WHERE `p_id` = '$product_id' AND `c_id` = '$customer_id'";
        return $this->db_query($sql);
    }
   //remove items form cart
    function remove_from_cart ($product_id,$customer_id){
        $sql= "DELETE FROM `cart` WHERE `p_id`='$product_id' AND `c_id` = '$customer_id'";
        return $this->db_query($sql);
     }
     //view your cart
     function view_cart_class($product_id,$customer_id){
        $sql= "SELECT * FROM `cart` WHERE `p_id`='$product_id' AND `c_id` = '$customer_id'";
        return $this->db_fetch_one($sql);
     }
    //vieww your cart
    function view_your_cart($customer_id){
      $sql= "SELECT products.product_id, products.product_title, products.product_price, cart.p_id, cart.qty, 
                  cart.c_id FROM products JOIN cart WHERE products.product_id = cart.p_id AND cart.c_id = '$customer_id'";
      return $this->db_fetch_all($sql);
   }
   //view the items in the cart
    function view_your_items($customer_id){
      $sql= "SELECT COUNT(*) FROM `cart` WHERE `cart.c_id` = '$customer_id';";
      return $this->db_fetch_one($sql);
   } 
     
}
?>