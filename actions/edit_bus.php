<?php

include ('../controllers/bus_controller.php');
// check if button is clicked
//editing brand
if (isset($_POST["update_bus"]))
{
    $bus_id=$_POST["bus_id"];
    $new_bus= $_POST["new_bus_name"];
    $new_route= $_POST["new_route"];
    $new_time = $_POST["new_time"];
    $new_seats= $_POST["new_seats"];
    $new_price= $_POST["new_price"];
    $new_luggage= $_POST["new_luggage"];

  $result = updatebus_ctrl($bus_id,$new_bus,$new_route,$new_time,$new_seats,$new_price,$new_luggage);
  if($result)
  {
    session_start();
        $_SESSION["update_cat"] = true;
    header("Location: ../Admin/buses.php");
  }else {
    echo "Failed";
  }

}
?>