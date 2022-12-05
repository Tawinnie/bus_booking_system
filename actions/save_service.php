<?php 
//when the admin clicks the  button, to add brand
include("../controllers/service_controller.php");
session_start();

if (isset($_POST['add_service'])) 
{ 
    $cat = $_POST['service_cat'];
    $title = $_POST['service_name'];
    $price = $_POST['service_price'];
    $descr = $_POST['service_descr'];
    $keyword= $_POST['service_keywords'];

 $result = insertservice($cat,$title,$price,$descr,$keyword);
   if ($result) {
  
      header("Location: ../admin/services.php");
  } else {
   $_SESSION['cat'] = "<script>alert('Category addition unsuccessful')</script>";
      echo "Echoke";
}
}

?>
