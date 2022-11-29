

<?php
session_start();
require("../functions/cart_function.php");
include ("../controllers/product_controller.php");
$allproducts = selectallproducts_ctr();
$ip_address= get_ip_address();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <br></br>
<!-- <a href="add_product.php">Add Products</a> -->
<br></br>

<form action="product_search_result.php">
    <input type="text" name="psearch" placeholder="Search by name">
    <input type="submit" value="Search" name="submit">   
</form>
<table>
<div class="container">	
	<h4><i class="fa fa-users"></i>Available Services</h4><hr>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>Service Name</th>
				<th>Service Price</th>
				<!-- <th>View Service</th>
				<th>Update Service</th>
        <th>Book Service</th> -->

			</tr>
		</thead>
		<tbody>	
			
</div>			

  <?php
       // include ("../controllers/product_controller.php");
        // include ("../fun/product_function.php");

//        $data = selectallproducts_ctr();
        foreach($allproducts as $key => $value) {
            echo '
                <tr>
                    <td>'. $value["product_title"] .'</td>
                    <td>'. $value["product_price"] .'</td>
                    <td>'. $value["product_image"] .'</td>
                    <td><a href="single_product.php?pid='. $value["product_id"] .'">View</a></td>
                 
                            </a>
                    </td>
                    <td>
                <form class="form-inline" method="POST" action="../actions/add_to_cart.php">
                  <input class="form-control mr-sm-2" type="hidden" value="'.$ip_address.'" name="ip">
                  <input class="form-control mr-sm-2" type="hidden" value="'. $_SESSION["customer_id"].'" name="customer_id">
                  <input class="form-control mr-sm-2" type="hidden" name="product_id" value =" '.$value["product_id"].'">
                  <input class="form-control mr-sm-2" name="quantity" type="number" placeholder="Number of seats/package/Luggage" aria-label="Quantity">
                  <input type="submit" name="add_to_cart" value="Book This Service">

                </form>
              </td>
                <be>

                
              </tr>  
                </tr>';
        }
                ?>

  </tbody>
</table>
<br><br>
<a href="cart.php">View Your Cart</a>
</body>
</html>