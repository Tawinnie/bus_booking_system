<?php 
//when a customer clicks the register button
include("../controllers/customer_controller.php");

if (isset ($_POST['submit'])) {
    $name = $_POST['customer_name'];
    $email = $_POST['customer_email'];
    $password = $_POST['customer_pass'];
    $contact = $_POST['customer_contact'];
    $city = $_POST['customer_city'];
    $user_role=0;
   

 $hash_password = base64_encode($password);
 $result =  insertCustomer_ctr($name,$email,$hash_password,$contact,$city,$user_role);
 if ($result) {
    header("Location: ../view/login.php");
 }
 else 
    echo "Registration Unsuccessful!";
}

?>
