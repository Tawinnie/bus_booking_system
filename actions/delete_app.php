<?php

include '../controllers/booking_controller.php';
// check if button is clicked
if(isset($_POST["delete"])){
    // grab form data
    $app_id = $_POST["app_id"];
    $customer_id = $_POST["customer_id"];
   

    $result = delete_booking_ctr($app_id);
    //echo $result;

    if ($result) {
        header("location: ../view/bk_confirmation.php");
    } else {
        echo "Unable to Delete";
    }
}



?>