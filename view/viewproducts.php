<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     
     <title>Services</title>
  </head>
<body>
<?php
include ("../functions/general_function.php");

$data = selectallproducts_ctr();
echo "<h1 id='title' style='text-align: left;'>View All Services</h1>";
    echo '<table class="table">';
      echo '    <table class="table table-dark">';
      echo '    <thead>';
      echo '    <tr>';
      echo '    <th scope="col">Service Category</th>';
      echo '    <th scope="col">Service Brand</th>';
      echo '    <th scope="col">Service Name</th>';
      echo '    <th scope="col">Service Price</th>';
      echo '    <th scope="col">Service Description</th>';
      echo '    <th scope="col">Service Keywords</th>';
      echo '    <th scope="col">Product Edit</th>';
      echo '    </tr>';
      
        foreach($data as $key => $value) {
            echo '<tr>
                    <td>
                        '. $value["product_cat"] .'</td>
                        <td>    '. $value["product_brand"].'   </td>     
                        <td>'. $value["product_title"].'        </td>
                        <td>'. $value["product_price"].'    </td>
                        <td>'. $value["product_desc"].' </td>
                        <td>'. $value["product_keywords"].'   </td>  
                    <td>
                    <a href="product_edit.php?id='.$value["product_id"].'">Edit</a>
                    </td>
                </tr>';
        }
      
      ?>
    </thead>
    <tbody>
   
    </tbody>
  </table>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
</body>
</html>