<?php
//connect to the cart class
include "../classes/bus_class.php";

//function to insert buses
function addbus_ctrl($bus_name,$route,$departure_time,$seats,$price,$luggage){
    $addbus = new Bus();
    return $addbus->addbus_class($bus_name,$route,$departure_time,$seats,$price,$luggage);
}
// sekect buses
function displaybuses(){
    $display = new Bus();
    return $display->selectallbuses();
}
//update buses
function updatebus_ctrl($bus_id,$new_bus,$new_route,$new_departure_time,$new_seats,$new_price,$new_luggage){
    $new_bus = new Bus();
    return $new_bus->updatebuses($bus_id,$new_bus,$new_route,$new_departure_time,$new_seats,$new_price,$new_luggage);
}
//search for a  bus
function searchbus_ctrl($route){
    $searchbus = new Bus();
    return $searchbus->searchbus_class($route);
}
?>
