<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Management </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

  <?php
session_start();
//$_SESSION['product'];
    //function for category
  //step one create awareness
    // require('../controllers/general_controller.php');
   require('../functions/general_function.php');
?>

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
    <form action="../actions/save_service.php" method="POST" enctype="multipart/form-data">
        <div>
         <label for="pcat">Category:</label><br>
                <select name="pcat" id="mycat">
                    <?php 
                        //call function to dynamically display  categories on dropdown
                    get_all_cat_function();
                    ?>
                </select>
            <!-- <input type="text" id="pcat" name="product_cat"><br> -->
        </div>

        <div>
           <label for="pbrand">Brand:</label><br>
                <select name="pbrand" id="brand">
                    <?php 
                    //call a function to dynamically display the brands on dropdown
                    get_all_brands_function();
                    ?>
                </select>
            <!-- <input type="text" id="pbrand" name="product_brand"> -->
        </div>

        <div>
            <label for="ptitle">Service Name:</label><br>
                <input type="text" id="ptitle" name="product_title" placeholder="Add Product Title"><br>
        </div>
        
        <div>
            <label for="pprice">Service Price:</label><br>
            <input type="text" id=pprice name="product_price" placeholder="Add Product Price">
        </div>

        <div>
            <label for="pdescr">ServiceDescription:</label><br>
            <input type="text" id=pdescr name="product_descr" placeholder="Describe your Product"><br>
        </div>

        <!-- <div>
            <label for="image">Add Image:</label><br>
            <input type="file" id=pimage name="product_image" placeholder="Add Product Image">
        </div> -->

  
        <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Save the Service</button>

        <!-- <input type="submit" id="submitting" name="submit" value="Save Product"> -->

        <div class="d-flex justify-content-center">
              <a href="../view/viewproducts.php" >update services here</a>

        </div>

    </form>
</body>
</html>