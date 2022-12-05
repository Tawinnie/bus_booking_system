  <?php
session_start();
//$_SESSION['product'];
    //function for category
  //step one create awareness
    // require('../controllers/general_controller.php');
   require('../functions/service_function.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Management </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Add the Bus Services</h2>
              <!-- <p class="text-white-50 mb-5">Please enter your brand name</p> -->
    <form action="../actions/save_service.php" method="POST" >
        <div>
         <label for="service_cat"> Service Category:</label><br>
                <select name="service_cat" id="mycat">
                    <?php 
                        //call function to dynamically display  categories on dropdown
                    get_all_categories_function();
                    ?>
                </select>
            <!-- <input type="text" id="pcat" name="product_cat"><br> -->
        </div>

       

        <div>
            <label for="service_name">Service Name:</label><br>
                <input type="text" id="service_name" name="service_name" placeholder="Add Service Name"><br>
        </div>
        
        <div>
            <label for="service_price">Service Price:</label><br>
            <input type="text" id="service_price" name="service_price" placeholder="Add Service Price">
        </div>

        <div>
            <label for="service_descr">Service Description:</label><br>
            <input type="text" id="service_descr" name="service_descr" placeholder="Describe your Service"><br>
        </div>
        <div>
            <label for="service_keywords">Service keywords:</label><br>
            <input type="text" id="service_keyword" name="service_keywords" placeholder=" Service Keywords"><br>
</div>
  
        <button class="btn btn-outline-light btn-lg px-5" name="add_service" type="submit">Save the Service</button>

        <!-- <input type="submit" id="submitting" name="submit" value="Save Product"> -->

        <div class="d-flex justify-content-center">
              <a href="../view/viewproducts.php" >update services here</a>

        </div>

    </form>
</body>
</html>