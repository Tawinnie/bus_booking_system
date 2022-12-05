<?php

session_start();

include ("../controllers/payment_controller.php");

$email=$_POST['email'];
$amount= $_POST['amount'];

$ref = $_POST['ref'];

$response= $_POST['res'];

//generates the invoice id
$invoice= mt_rand();

if ($response == "success"){
  //insert into the order table
  insert_order_ctr($_SESSION['user_id'],$invoice,date("Y/m/d"),$response);

  //get the last oder details
  $data= get_last_order_ctr($invoice);

  //insert into tp the payment table
  insert_payment_ctr($amount, $_SESSION['user_id'],$data['order_id'],'GHS',date("Y/m/d"));

  //select all the user cart data
  $val=select_app_user_ctr($_SESSION['user_id']);

  //loop through the arrayand insert into the order table
  foreach ( $val as $v) {
    insert_order_details_ctr($data['order_id'],$v['p_id'],$v['qty']);
    

  }
  //delete from the cart table
  delete_one_booking_ctr($_SESSION['cid']);
 


}else{

}

$url = "https://api.paystack.co/transaction/initialize";
$fields = [
  'email' => $email,
  'amount' =>  $amount
];
$fields_string = http_build_query($fields);
//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
  "Cache-Control: no-cache",
));

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$result = curl_exec($ch);
echo $result;
?>
