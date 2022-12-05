<?php 
//when a customer clicks the register button
include("../controllers/bus_controller.php");

if (isset ($_POST['submit'])) {
    $bus_name = $_POST['bus_name'];
    $route= $_POST['route'];
    $departure_time = $_POST['time'];
    $seats = $_POST['seats'];
    $price = $_POST['price'];
    $luggage = $_POST['luggage'];

 $result = addbus_ctrl($bus_name,$route,$departure_time,$seats,$price,$luggage);
 if ($result) {
    echo "added";
    header("Location: ../admin/buses.php");
 }
 else 
    echo "Failed to add bus";
}