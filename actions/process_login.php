<?php
require ('../errors/errors.php');
include("../controllers/customer_controller.php");

//for login
if(isset($_POST['submit2']))
{
    $phone=$_POST['customer_contact'];
    $password=$_POST['pass'];

        if (empty($phone)) 
        {
            array_push($errors, "Phone number is required");
        }
        if (empty($password)) 
        {
            array_push($errors, "Password is required");
        }
        //if there are no errors
        if (count($errors) == 0) 
        {
            //decrypt password to match the one stored in the database
            $hash = base64_decode($password);
            $logresult= newlogin($phone, $hash);
                
                // if ($logresult['customer_contact']===$phone){
                    if ($logresult['customer_contact'] === $phone && $logresult['customer_pass'] === $hash) 
                    {
                        
                            $_SESSION['fullname'] = $logresult['fullname'];
                            // $_SESSION['fullna'] = $row['fullname'];
                            $_SESSION['id'] = $row['id'];
                            header("Location: ../index.php");
                            exit();

                    }
                    else{

                            header("Location: ../view/login.php?error= OOPS SORRY! Incorrect email or password");
                            exit("This email and password does not exist");

                        }

                    //go to manage products if not proceed to homepage
                    // echo "Logged in  successful!";
                    // }
                    // else
                    // { 
                    //     echo "Failed to Log you in";
                    //}
        }

}

// session_start();
// //defining user role upon login to direct which page a user would go to
// if ($logresult["user_role"] == 1)
// {
//     header('Location: ../Admin/add_brand.php');
//     $_SESSION["verifyrole"] = 1;
   
// } else{

//    $_SESSION["verifyrole"] = 0;
//     header('Location: ../view/homepage.php');

//         }

 //if the email and password is empty,show an error
//  if (empty($phone)) 
//  {
//      array_push($errors, "Phone number is required");
//  }
//  if (empty($password)) 
//  {
//      array_push($errors, "Password is required");
//  }
//  //if there are no errors
//  if (count($errors) == 0) 
//  {
//      $password = md5($password);//encrpt password 
//      //select the data from database
//      $sql = "SELECT * FROM student WHERE email='$email' AND password='$password'";

//      $result = mysqli_query($db, $sql);           
     
//         $row = mysqli_fetch_assoc($result);
//      if ($row['email'] === $email && $row['password'] === $password) 
//      {
         

//            echo "email";
//               echo "password";

//              $_SESSION['username'] = $row['username'];

//             $_SESSION['fullname'] = $row['fullname'];

//             $_SESSION['id'] = $row['id'];

//                header("Location: Navbar.php");

//               exit();

//            }else
//                {

//                 header("Location: Login.php?error= OOPS SORRY! Incorrect email or password");

//                exit("This email and password does not exist");

//                }

//             }else{
//           echo " ";
//       }
// }

  
?>