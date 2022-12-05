<?php
    include ("../controllers/bus_controller.php");
    $products = searchbus_ctrl($_GET["psearch"]);
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

  </head>
<body>
<?php
echo '<table class="table table-hover">';
  echo '<thead>';
    echo '<tr>';
      echo'  <th scope="col">Bus Name</th>';
      echo '  <th scope="col">Route</th>';
      echo ' <th scope="col">Departure Time</th>';
      echo ' <th scope="col">More Details</th>';
      echo '<th scope="col">Book This Bus</th>';
   echo '</tr>';
  echo ' </thead>';
echo ' <tbody>';
        foreach($products as $key => $value) {
            echo '
                <tr>
                    <td>'. $value["bus_name"] .'</td>
                    <td>'. $value["route"] .'</td>
                    <td>'. $value["departure_time"] .'</td>
                    
                    <td><a href="single_bus.php?pid='. $value["bus_id"] .'">View</a></td>
                    <td><td> <a href="../actions/add_to_cart.php"><button name="add_to_cart">Book This Service</button>
                    </a>
                      </td>

                </tr>';
        }
                ?>
                
  </tbody>
</table>
</body>
</html>