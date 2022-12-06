<?php

require '../settings/db_class.php';

class AddCAT extends db_connection{
    //CATEGORIES METHODS
    //add, edit, delete category
    //add category
    function addcat($cat){
       // take a query
       $catquery= "INSERT INTO `categories`(`cat_name`) VALUES ('$cat')";
       // execute query
       return $this->db_query($catquery);
    }

//display category
    function selectcat(){
		$sql="SELECT * FROM `categories` ";
        return $this->db_fetch_all($sql);
        
	}
//select one category service 
    function selec_one_cat($id){
		$sql="SELECT * FROM `categories` WHERE `cat_id`='$id'";
        return $this->db_fetch_one($sql);
        
	}
//update category
    //--UPDATE--//
	function updatecat($id, $cat){
        $sql = "UPDATE `categories` SET `cat_name`='$cat' WHERE `cat_id`='$id'";
		//exceute sql
		return $this->db_query($sql);

	}

  
//SERVICE METHODS
function addservice($service_cat,$service_name,$service_price,$service_desc,$service_keywords){
    // take a query
    $sql= "INSERT INTO `services`(`service_cat`, `service_name`, `service_price`, `service_desc`, `service_keywords`) 
    VALUES ('$service_cat','$service_name','$service_price','$service_desc','$service_keywords')";
    // execute query
    return $this->db_query($sql);
 }


 function selectservices(){
     $sql=" SELECT * FROM `services` ";
    return $this->db_fetch_all($sql);
  
 }

 function selectservice($id){
    $sql=" SELECT * FROM `services` WHERE `service_id`='$id'";
   return $this->db_fetch_one($sql);

}

 //--UPDATE--//
 function updateservice($service_id, $service_cat,$service_name,$service_price,$service_desc,$service_keywords){
     $sql = "UPDATE `services` SET `service_cat`='$service_cat',`service_name`='$service_name',`service_price`='$service_price',
     `service_desc`='$service_desc',`service_keywords`='$service_keywords' WHERE `service_id`= '$service_id'";
     //exceute sql
     return $this->db_query($sql);

 }
 //service SEARCH
 function searchservice($searchdata){
 $sql = "SELECT * FROM `services` WHERE `service_name` LIKE '%$searchdata%' ";
 return $this->db_fetch_all($sql);

 }

 //delete service
 function deleteservice($service_id){
    $sql="DELETE FROM `services` WHERE `service_id` = '$service_id' ";
    return $this->db_query($sql);
 }
// APPOINTMENT
//add,edit,delete
//add appointment
function addbooking($customer_id,$service_id,$app_date){
    $sql="INSERT INTO `appointment`( `customer_id`, `service_id`, `app_date`) VALUES ('$customer_id','$service_id','$app_date'";
    return $this->db_query($sql);
}

//display
function selectbooking(){
    $sql ="SELECT * FROM `appointment`";
    return $this->db_fetch_all($sql);

}

//edit appointment
function updatebooking($app_id,$customer_id,$service_id,$app_date){
    $sql = "UPDATE `appointment` SET `customer_id`='$customer_id',`service_id`='$service_id',`app_date`='$app_date'; 
    WHERE `app_id`='$app_id'";
    return $this->db_query($sql);
}

//delete appointment
function cancelbooking($app_id,$customer_id,$service_id,$app_date){
    $sql ="DELETE FROM `appointment` WHERE `app_id` ='$app_id'";
     return $this->db_query($sql);
}


}
?>

