<?php

//class
require('../settings/db_class.php');

class Customer extends db_connection{
    function getcustomersdata($fullname,$contact,$city,$password,$user_role){
    //function to add the user into the database
        $sql= "INSERT INTO `customer`( `customer_name`, `customer_pass`,`customer_city`, `customer_contact`,`user_role`) 
        VALUES ('$fullname','$password','$city','$contact',0)";
            return $this->db_query($sql);
    }

function Uniquemail($fullname,$email,$contact,$country,$city,$password){
    $sql= "SELECT `customer_email` FROM `customer` WHERE customer_email='$email'";
    return $this->db_query($sql);
      }


    //fucntion to query the login attempt
    function logcustomer($phone,$password) 
    {
    //query to select from the database
        $querylog= "SELECT * FROM `customer` WHERE `customer_contact` = '$phone' OR `customer_pass` = '$password'";
       //this fetches the records
        return $this->db_fetch_one($querylog); 
    }
    }
?>