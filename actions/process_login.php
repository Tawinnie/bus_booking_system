<?php

require '../controllers/customer_controller.php';
session_start();

if(isset($_POST['login'])){

    $email=$_POST['customer_email']; 
    $password=$_POST['password']; 
    // Validating email
    // if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $hash = base64_encode($password);

    $result = returnCustomer_ctr($email,$hash);
        var_dump($result);
    if ($result){
        //go to manage products if not proceed to homepage
        $_SESSION["customer_id"] = $result["customer_id"];
        if ($result["user_role"] == 1) {
            $_SESSION["verifyrole"] = 1;
            header("Location: ../admin/admin.php");
        }
        else 
            $_SESSION["verifyrole"] = 0;
        header("Location: ../view/userlandingpage.php");
    }
    else {
            echo "Echoke";
    }
}

    else
    { 
        echo "Failed to Log you in";
    }

// }

?>
