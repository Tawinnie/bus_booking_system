<?php

include ('../controllers/service_controller.php');
// check if button is clicked
//editing brand
if (isset($_POST["update_categories"])){
    $id=$_POST["cat_id"];
    $new_cat= $_POST["new_cat"];

  $result =updateCAT($id,$new_cat);
  if($result)
  {
    session_start();
        $_SESSION["update_cat"] = true;
    header("Location: ../Admin/category.php");
  }else {
    echo "Failed";
  }

}
?>