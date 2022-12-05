<?php

include ("../classes/service_class.php");

//CATEGORIES
//--INSERT--//
function insertCAT($cat){
    $newdata = new AddCAT();
     return $newdata->addCAT($cat);
}


//--SELECT--//
function getCAT(){
    $newdata = new AddCAT();
    return $newdata->selectCAT();  
}

//--UPDATE--//
function updateCAT($id,$cat){
    $newdata = new AddCAT();
    return $newdata->updateCAT($id,$cat);
}

//SERVICES
//--INSERT--//
function insertservice($service_cat,$service_name,$service_price,$service_desc,$service_keywords){
    $newdata = new AddCAT();
     return $newdata->addservice($service_cat,$service_name,$service_price,$service_desc,$service_keywords);
}


//--SELECT--//
function getservices(){
    $newdata = new AddCAT();
    return $newdata->selectservices();  
}

function getservice($id){
    $newdata = new AddCAT();
    return $newdata->selectservice($id);  
}

//--UPDATE--//
function updateservice($service_id, $service_cat,$service_name,$service_price,$service_desc,$service_image,$service_keywords){
    $newdata = new AddCAT();
    return $newdata->updateservice($service_id, $service_cat,$service_name,$service_price,$service_desc,$service_image,$service_keywords);
}

//service search
function searchservice($service_keywords){
    $newdata = new AddCAT();
    return $newdata-> searchservice($service_keywords);  
}

//service deletion
function deleteservice($service_id){
    $newdata=new AddCAT();
    return $newdata-> deleteservice($service_id);
}

//APPOINTMENT MANAGMENT

//add appoinmtnet
function addbooking_ctr($customer_id,$service_id,$app_date){
    $newbook = new AddCAT();
    return $newbook->addbooking($customer_id,$service_id,$app_date);
}

//display booking
function selectbooking_ctr(){
    $select = new AddCAT();
    return $select->selectbooking();
}

//update booking
function updatebooking_ctr($app_id,$customer_id,$service_id,$app_date){
    $updatebook = new AddCAT();
    return $updatebook->updatebooking($app_id,$customer_id,$service_id,$app_date);
}

//delete booking 
function deletebooking_ctr($app_id,$customer_id,$service_id,$app_date){
    $delete = new AddCAT();
    return $delete->cancelbooking($app_id,$customer_id,$service_id,$app_date);
}
?>


