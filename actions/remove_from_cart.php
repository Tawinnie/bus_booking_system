<?php

// require("../controllers/product_controller.php");
// session_start();

// $cid = $_SESSION['customer_id'];
// $pid = $_GET['id'];



// $duplicate_one_cart = duplicate_one_cart_ctrl($pid, $cid);
// print_r($duplicate_one_cart);
// if($duplicate_one_cart["qty"] <= 1){
//    $del =delete_cart_qty_ctrl($pid,$cid);
//    if($del){
//         header("location:../view/cart.php");
//    }
//     else{
//         echo"delete failed";
//     }
// }
// else{

//   $update = update_more_cart_qty_ctrl($pid,$cid);

//   if ($update) {
//       header("location:../view/cart.php");
//       # code...
//   }
//   else{
//       echo"failed";
//   }

// }

?>

<?php

include '../controllers/cart_controller.php';
if(isset($_POST["remove"])){
    $product_id = $_POST["product_id"];
    $customer_id = $_POST["customer_id"];
//db deletion

    $result = remove_from_cart_ctrl($product_id,$customer_id);
    //echo $result;

    if ($result) {
        // session_start();
        // $_SESSION["cart_upt"] = true;
        header("location: ../view/cart.php");
    } else {
        echo " Sorry unable to Delete";
    }
}



?>