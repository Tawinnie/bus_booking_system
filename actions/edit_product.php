<?php

include ('../controllers/product_controller.php');
// check if button is clicked
//editing brand
if (isset($_POST["update_product"])){
    $product_id=$_POST["product_id"];
    $new_product_cat= $_POST["new_product_cat"];
    $new_product_brand= $_POST["new_product_brand"];
    $new_product_title= $_POST["new_product_title"];
    $new_product_descr= $_POST["new_product_descr"];
    $new_product_image= $_POST["new_product_image"];
    $new_product_keywords= $_POST["new_product_keywords"];

  $result = update_product_ctr($product_id, $new_product_cat,$new_product_brand,$new_product_title,$new_product_price,$new_product_desc,$new_product_image,$new_product_keywords);
  if($result)
  {
    session_start();
        $_SESSION["update_product"] = true;
    header("Location: ../view/product.php");
  }else {
    echo "Failed";
  }

}
?>