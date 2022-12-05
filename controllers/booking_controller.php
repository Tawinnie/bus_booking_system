<?php

include "../classes/booking_class.php";


//APPOINTMENT MANAGMENT

//add appoinmtnet
function insert_booking_ctr($customer_id,$service_name,$cat_name, $app_date, $app_time){
  $newbook = new Booking();
  return $newbook->insert_booking_class($customer_id,$service_name,$cat_name, $app_date, $app_time);
}

//display booking
function display_booking($customer_id){
  $select = new Booking();
  return $select->display_booking($customer_id);
}

//update booking
function update_booking($app_id, $customer_id,$service_name,$cat_name, $app_date, $app_time){
  $updatebook = new Booking();
  return $updatebook->update_booking($app_id, $customer_id,$service_name,$cat_name, $app_date, $app_time);
}

//delete booking 
function delete_booking_ctr($app_id){
  $delete = new Booking();
  return $delete->delete_booking_class($app_id);
}

function delete_one_booking_ctr($customer_id){
  $delete = new Booking();
  return $delete->delete_one_booking_class($customer_id);
}


function insert_order_ctr( $customer_id,$invoice_no,$order_date,$order_stat){
  $select_contr= new Booking();
  $data = $select_contr->insert_order_cls( $customer_id,$invoice_no,$order_date,$order_stat);
  return $data;
}


function get_last_order_ctr($invoice){
  $select_contr= new Booking();
  $data= $select_contr-> get_last_order_cls($invoice);
  return $data;
}

function select_app_user_ctr($customer_id){
  $select_contr= new Booking();
  $data= $select_contr->get_user_app_cls($customer_id);
  return $data;
}

function insert_order_details_ctr($order_id,$product_id,$qty){
  $select_contr= new Booking();
  $data= $select_contr->insert_order_details_cls($order_id,$product_id,$qty);
  return $data;
}

?>