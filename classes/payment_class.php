<?php
//connect to database class
require("../settings/db_class.php");

class Payment extends db_connection{
    function insert_payment_class($amount, $customer_id, $app_id, $currency, $payment_date){
        $sql= "INSERT INTO `payment`(`amount`, `customer_id`, `app_id`, `currency`, `payment_date`) 
        VALUES ('$amount', '$customer_id', '$app_id', '$currency', '$payment_date')";
        return $this->db_query($sql);
    }

 

    function select_payment_class($id){
        $sql= "SELECT * FROM `payment` WHERE `pay_id`='$id'";
        return $this->db_fetch_all($sql);
    }


}

?>