<?php

require '../controllers/booking_controller.php';

if(isset($_POST['book'])){

    $customer_id = $_POST["customer_id"];
    $service_name=$_POST["service_name"];
    $cat_name=$_POST["service_cat"];
    $app_datetime=$_POST["app_date"]; 
    $app_datetime = explode('T', $app_datetime);
    $app_date = $app_datetime[0];
    $app_time = $app_datetime[1].":00";


    $result = insert_booking_ctr($customer_id,$service_name,$cat_name, $app_date, $app_time);
    echo($result);
    if ($result) {
        echo "Inserted succesfully";
        header("location: ../view/bk_confirmation.php");
    } else {
        echo "Insertion failed";
    }
}

if(isset($_POST['update_book'])){

    $app_id = $_POST["app_id"];
    $customer_id = $_POST["customer_id"];
    $service_name=$_POST["service_name"];
    $cat_name=$_POST["service_cat"];
    $app_datetime=$_POST["app_date"]; 
    $app_datetime = explode('T', $app_datetime);
    $app_date = $app_datetime[0];
    $app_time = $app_datetime[1].":00";

    $result = update_booking($app_id, $customer_id,$service_name,$cat_name, $app_date, $app_time);
    if ($result) {
        echo "Inserted succesfully";
        header("location: ../view/bk_confirmation.php");
    } else {
        echo "Insertion failed";
    }
}

?>