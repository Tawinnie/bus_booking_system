<?php 
//when the admin clicks the  button, to add brand
//include("../controllers/general_controller.php");
include("../controllers/product_controller.php");
session_start();

if (isset($_POST['save_brand'])) 
{
    $brand = $_POST['brand_name'];
   
 $result = newbrand($brand);
 if ($result) 
   {   

      // $select= newdisplay($id,$brand);
      $_SESSION['adb'] = "<script>alert('You will be asked to add a brand. Click ok to continue')</script>";
      // echo "Registration successful!";
      header("Location: ../Admin/brands.php");
   }
 else{    
  $_SESSION['adb'] = "<script>alert('Brand addition unsuccessful')</script>";
 }
}

// //editing brand
// if (isset($_POST["edit_brand"])){
//   $new_brand= $_POST["new_brand"];
//   $id=$_POST["brand_id"];

//   $result =newupdate($id,$brand);
//   if($result)
//   {
//     header("Location: ../Admin/brand.php");
//   }else {
//     echo "Failed";
//   }

// }
?>
