<?php
//connect to database class
require("../settings/db_class.php");


class CustomerClass extends db_connection{

    function insertCustomer_cls($name,$email,$password,$contact,$city,$userRole){
       
        $sqltwo= "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_contact`, `customer_city`,`user_role`) 
        VALUES ('$name','$email','$password','$contact','$city','$userRole')";
        return $this->db_query($sqltwo);

    }

    function returnCustomer_cls($email,$password){
            $sqltwo= "SELECT * FROM `customer` WHERE `customer_email` = '$email' AND `customer_pass`= '$password'";
            return $this->db_fetch_one($sqltwo);
    
        }
        function returnCustomerid_cls($id){
            $sqltwo= "SELECT * FROM `customer` WHERE `customer_id` = '$id'";
            return $this->db_fetch_one($sqltwo);
    
        }
        
        function get_user_appointment_cls($app_id){
    
            $sql = "SELECT * FROM `appointment` WHERE `customer_id`='$app_id'";
            return $this->db_fetch_all($sql);
        }
    

    // function check_login_details($email){
    //     $sql= "SELECT * FROM `customer` WHERE `customer_email` =`$email`";
    // }

    //     function check_user_role($email){
    //         $sql="SELECT `user_role` FROM `customer` WHERE `customer_email=`$email`";
    //     }
    //functions for apppointment/booking

//     function insert_booking_class($customer_id,$service_id,$app_date,$app_status){
//         $sql= "INSERT INTO `appointment`( `customer_id`, `service_id`, `app_date`, `app-status`) 
//         VALUES ('$customer_id','$app_date','$app_status'";
//         return $this->query($sql);
//     }

//     function display_booking($app_id){
//         $sql = "SELECT  `customer_id`, `service_id`, `app_date`, `app-status` FROM `appointment` WHERE `app_id`='$app_id";
//         return $this->query($sql);
//     }


// //function to update a booking when a user clicks on cancel apppintment
// function update_booking($app_id,$customer_id,$service_id,$app_date,$app_status){
//     $sql = "UPDATE `appointment` SET `customer_id`='$customer_id',
//     `service_id`='$service_id',`app_date`='$app_date',`app-status`='$app_status' WHERE `app_id`='$app_id'";
//     return $this->query($sql);
// }
// //function to delete a bookin
// function delete_booking_class($app_id){
//     $sql = "DELETE FROM `appointment` WHERE `app_id`='$app_id";
//     return $this->query($sql);
// }

}


?>