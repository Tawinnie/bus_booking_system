<?php

require ('../settings/db_class.php');

class Bus extends db_connection{

    //add, edit, delete

    //add buses
    function addbus_class($bus_name,$route,$departure_time,$seats,$price,$luggage){
        $sql = "INSERT INTO `buses`( `bus_name`,  `route`, `departure_time`, `seats`, `price`, `luggage`) 
        VALUES ('$bus_name','$route','$departure_time','$seats','$price','$luggage')";
        return $this->db_query($sql);
    }

    //select one bus
    function selectbus_class($bus_id){
        $sql = "SELECT * FROM `buses` WHERE `bus_id` = '$bus_id'";
        return $this->db_fetch_one($sql);
    }
    //select all buses
    function selectallbuses(){
        $sql ="SELECT * FROM `buses`";
        return $this->db_fetch_all($sql);
    }
    //update buses 
    function updatebuses($bus_id,$new_bus,$new_route,$new_departure_time,$new_seats,$new_price,$new_luggage){
        $sql = "UPDATE `buses` SET `bus_id`='$bus_id',`bus_name`='$new_bus',`route`='$new_route',
        `departure_time`='$new_departure_time',`seats`='$new_seats',`price`='$new_price',`luggage`='$new_luggage' WHERE `bus_id`='$bus_id'";
        return $this->db_query($sql);
    }
    function searchbus_class($route)
          {
            $display= "SELECT * FROM `bus` WHERE `route` LIKE '%$route%'";
            return $this->db_fetch_all($display);
          }
}
?>