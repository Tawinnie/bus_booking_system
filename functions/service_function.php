<?php
    require('../controllers/service_controller.php');

function get_all_categories_function()
{
	//call the controller
	$allcategories = getCAT();
	//display the records
	if ($allcategories)
    {
		//loop through the recrods one at a time
		foreach ($allcategories as $key => $value) 
        {
			$catid = $value['cat_id'];
			$catname = $value['cat_name'];

			echo '<option value ="'.$catid.'">'.$catname.'</option>';
		}

    }
}
function get_all_services_function()
{
	//call the controller
	$allservices = getservices();
	//display the records
	if ($allservices)
    {
		//loop through the recrods one at a time
		foreach ($allservices as $key => $value) 
        {
			$serviceid = $value['service_id'];
			$servicename = $value['service_name'];

			echo '<option value ="'.$serviceid.'">'.$servicename.'</option>';
		}

    }
}

function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
  
?>
