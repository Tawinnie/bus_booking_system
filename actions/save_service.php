<?php 
//when the admin clicks the  button, to add brand
include("../controllers/product_controller.php");
session_start();

if (isset($_POST['submit'])) 
{ 
    $cat = $_POST['pcat'];
    $brand = $_POST['pbrand'];
    $title = $_POST['product_title'];
    $price = $_POST['product_price'];
    $descr = $_POST['product_descr'];
    // $image= $_POST['product_image'];
    $keyword= $_POST['product_keyword'];

     echo "$descr";
 $result = save_product_ctr($cat,$brand,$title,$price,$descr,$keyword);
 if ($result) 
   {   
      // $select= newdisplay($id,$brand);
     // $_SESSION['product'] = "<script>alert('You will be asked to add a category. Click ok to continue')</script>";
      // echo "Registration successful!";
      header("Location: ../view/viewproducts.php");
   }else{    
  $_SESSION['product'] = "<script>alert('Category addition unsuccessful')</script>";
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
