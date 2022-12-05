<?php 
//when the admin clicks the  button, to add brand
include("../controllers/service_controller.php");
session_start();

if (isset ($_POST['add_category'])) 
{
    $cat_name = $_POST['cat_name'];
   
 $result = insertCAT($cat_name);
 if ($result) 
   {   

      // $select= newdisplay($id,$brand);
      // $_SESSION['cat'] = "<script>alert('You will be asked to add a category. Click ok to continue')</script>";
      // echo "Registration successful!";
      header("Location: ../admin/category.php");
   }
 else{    
  $_SESSION['cat'] = "<script>alert('Category addition unsuccessful')</script>";
 }
}

//editing brand
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
