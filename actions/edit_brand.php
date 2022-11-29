<?php

include ('../controllers/product_controller.php');
// check if button is clicked
//editing brand
if (isset($_POST["update_brand"])){
    $id=$_POST["brand_id"];
    $new_brand= $_POST["new_brand"];

  $result =newupdate($id,$new_brand);
  if($result)
  {
    session_start();
        $_SESSION["upadte_brand"] = true;
    header("Location: ../Admin/brands.php");
  }else {
    echo "Failed";
  }

}
?>