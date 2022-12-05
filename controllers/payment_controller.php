<?php
//connect to the user account class
include("../classes/payment_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}


function insert_payment_ctr($amount, $customer_id, $app_id, $currency, $payment_date)
{
  $insert_contr= new Payment();

  $insert_contr->insert_payment_class($amount, $customer_id, $app_id, $currency, $payment_date);
}


//--INSERT--//

//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>