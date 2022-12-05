<?php

require("../classes/customer_class.php");

function insertCustomer_ctr($name,$email,$password,$contact,$city,$userRole){
  $add_customer= new CustomerClass();
  return $add_customer->insertCustomer_cls($name,$email,$password,$contact,$city,$userRole);
}


function returnCustomer_ctr($email,$password){
  $add_customer= new CustomerClass();
  return $add_customer->returnCustomer_cls($email,$password);
}

function returnCustomerid_ctr($id){
  $add_customer= new CustomerClass();
  return $add_customer->returnCustomerid_cls($id);
}

function get_user_appointment_ctr($app_id){
  $insert_app= new CustomerClass();

  return $insert_app->get_user_appointment_cls($app_id);
}

?>