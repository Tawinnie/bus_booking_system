<?php 
session_start();
require("../functions/cart_function.php");
require("../controllers/cart_controller.php");
$allproducts =  view_your_cart_ctrl($_SESSION["customer_id"]);
$ip_address= get_ip_address();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Cart</title>

    <style>
   body {
  background: #eecda3;
  background: -webkit-linear-gradient(to right, #eecda3, #ef629f);
  background: linear-gradient(to right, #eecda3, #ef629f);
  min-height: 100vh;
   }
.feedback {
  background-color : #4CAF50;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
}

#mybutton {
  position: fixed;
  align-content: -4px;
  right: 10px;
}
.btn{
  background-color : #008CBA;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
}

#shop {
  position: fixed;
  align-content: -4px;
  left: 10px;
}
    </style>
</head>
<body>

<nav class="navbar navbar-light bg-light justify-content-between">
    <div id="shop">
      <button type="button" onclick="window.location.href='all_products.php'" class="btn ">CONTINUE SHOPPING</button><br>
      </div>
<br>
      <div id="mybutton">
        <button type="button" onclick="window.location.href='../index.php'" class="feedback">PROCEED TO PAYMENT</button>
        </div>

      <header id="header" class="fixed-top d-flex align-items-center header-transparent">
          <div class="container d-flex align-items-center">
              </header>
</nav> 
<div class="px-4 px-lg-0">
  <!-- For demo purpose -->
  <div class="container text-white py-5 text-center">
    <h1 class="display-4">Booking Information</h1>
    <p class="lead mb-0">Find below your selected services </p>
    <!-- <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white font-italic"> -->
            <!-- <u>Bootstrapious</u></a> -->
    </p>
  </div>

<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Service Name</th>
            <th scope="col">Service Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total Amount</th>
            <th scope="col">Update Quantity</th>
            <th scope="col">Cancel Booking</th>
          </tr>
        </thead>
        <tbody>
<?php

      foreach($allproducts as $key => $value)
      {
            echo '
        <tr>
            <td>' .$value["product_title"] . '</td>
            <td>' .$value["product_price"] . '</td>
            <td>' .$value["qty"] . '</td>
            <td>'. $value["qty"] * $value["product_price"] .' </td>

          <td>
              <form class="form-inline" method="POST" action="../actions/manage_quantity_cart.php">
                  <input class="form-control mr-sm-2" type="hidden" value="'.$ip_address.'" name="ip">
                  <input class="form-control mr-sm-2" type="hidden" value="'. $_SESSION["customer_id"].'" name="customer_id">
                  <input class="form-control mr-sm-2" type="hidden" name="product_id" value =" '.$value["product_id"].'">
                  <input class="form-control mr-sm-2" name="quantity" type="number" placeholder="Quantity" aria-label="Quantity">
                  <input type="submit" name="manage_cart" value="Update Quantity">
              </form>
          </td>
            
          <td>
              <form class="form-inline" method="POST" action="../actions/remove_from_cart.php">
                  <input class="form-control mr-sm-2" type="hidden" value="'. $_SESSION["customer_id"].'" name="customer_id">
                  <input class="form-control mr-sm-2" type="hidden" name="product_id" value =" '.$value["product_id"].'" >
                  <input type="submit" name="remove" value="Remove">
              </form>
          </td>

         <br>

        </tr> ';
          }
          ?>
          
</body>
</html>