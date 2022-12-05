<?php
//start session
session_start(); 


//for header redirection
ob_start();

//function to check for login
function check_login(){
    if(!isset($_SESSION['customer_id'])){
        
        header("Location: ../view/login.php?error=You are not logged in,Please Login first");
    }
    }

//function to get user ID


//function to check for role (admin, customer, etc)
function check_permission(){
    if(isset($_SESSION['user_role'])){
        return $_SESSION['user_role'];
    }
}

//logout

if(isset($_GET['logout']) && $_GET['logout'] == 'true'){
    session_unset();
    session_destroy();
    header('Location: ../view/login.php');
}

//get the name of the current page
$current_file = $_SERVER['SCRIPT_NAME']; 

//function to get client's IP address
// code obtained from https://phppot.com/php/how-to-get-the-client-user-ip-address-in-php/
function getIpAddress(){
	$ipAddress = '';
    if (! empty($_SERVER['HTTP_CLIENT_IP'])) {
        // to get shared ISP IP address
        $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // check for IPs passing through proxy servers
        // check if multiple IP addresses are set and take the first one
        $ipAddressList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        foreach ($ipAddressList as $ip) {
            if (! empty($ip)) {
                // if you prefer, you can check for valid IP address here
                $ipAddress = $ip;
                break;
            }
        }
    } else if (! empty($_SERVER['HTTP_X_FORWARDED'])) {
        $ipAddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (! empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
        $ipAddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    } else if (! empty($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipAddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (! empty($_SERVER['HTTP_FORWARDED'])) {
        $ipAddress = $_SERVER['HTTP_FORWARDED'];
    } else if (! empty($_SERVER['REMOTE_ADDR'])) {
        $ipAddress = $_SERVER['REMOTE_ADDR'];
    }
    return $ipAddress;
}



?>