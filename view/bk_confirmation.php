<?php
    session_start();
  include "../controllers/booking_controller.php";
	require "../functions/cart_function.php";
	$ip = getIPAddress(); 
    $apnt = display_booking($_SESSION["customer_id"]);
	$total = 0;

	?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarServ - Car Repair HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Zomba, Chinamwali</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Available 24/7 </small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>Call Or Text Us on 0993250666 / 0882842945</small>
                </div>
                
            </div>
        </div>
    </div>
   

    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarServ</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="booking.php" class="dropdown-item active">Booking</a>
                        <a href="team.php" class="dropdown-item">Technicians</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        <a href="404.php" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="../view/booking.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Book More<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                    <a class="signup__link" href="../view/payment.php"></a> <h3 class="text-white mb-4 align-center">  YOUR APPOINTMENTS </h3>
                        <!-- <h1 class="text-white mb-4 align-center">Certified and Award Winning Car Repair Service Provider</h1> -->
                        <p class="text-white mb-0 align-center">Thank you for choosing us.</p>
                    
                <!-- <a class="signup__link" href="../view/payment.php"></a> <h3 class="headstocks">  YOUR APPOINTMENTS </h3> -->
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Category</th> 
      <th scope="col">Service</th>
	  <th scope="col">Price</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Update Appointment</th>
      <th scope="col">Cancel appointment</th>
    </tr>
  </thead>  
  <tbody>
  <?php
            foreach($apnt as $key => $value) {
                $total = $total + $value["service_price"];
                echo '
                <tr>
                <td>' .$value["category"] . '</td>
                <td>' .$value["service"] . '</td>
                <td>' .$value["service_price"] . '</td>
				<td>' .$value["app_date"] . '</td>
				<td>' .$value["app_time"] . '</td>
              <td>
                <form class="form-inline" method="POST" action="./update_app.php">
                  <input class="form-control mr-sm-2" type="hidden" value="'.$ip.'" name="ip">
                  <input class="form-control mr-sm-2" type="hidden" value="'. $_SESSION["customer_id"].'" name="customer_id">
                  <input class="form-control mr-sm-2" type="hidden" name="app_id" value =" '.$value["app_id"].'">
                  <input type="submit" name="update_qty" value="Update Appointment">
                </form>
              </td>
              <td>
              <form class="form-inline" method="POST" action="../actions/delete_app.php">
                  <input class="form-control mr-sm-2" type="hidden" value="'. $_SESSION["customer_id"].'" name="customer_id">
                  <input class="form-control mr-sm-2" type="hidden" name="app_id" value =" '.$value["app_id"].'">
                  <input type="submit" name="delete" value="Cancel">
                </form>
              </td>
               <br>     
              </tr>               ' ; 

              
            }

            ?>  
  </tbody>
</table> 
            </div>
          </div>
    </div>
    <p>
  Sub total: <?php echo $total; ?>
</p>
<button type="button" onclick="window.location.href='payment.php?total=<?php echo $total?>' "class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Proceed to Payment<i class="fa fa-arrow-right ms-3"></i> </button><br> 
<!-- <a href="../view/booking.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Book More<i class="fa fa-arrow-right ms-3"></i></a> -->

    </div>
                </div>
<p>
  <!-- Sub total: <?php echo $total; ?>
</p>
<button type="button" onclick="window.location.href='payment.php?total=<?php echo $total?>' "class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Proceed to Payment<i class="fa fa-arrow-right ms-3"></i> </button><br> 
<a href="../view/booking.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Book More<i class="fa fa-arrow-right ms-3"></i></a> -->

</body>


</html>



	
         

	<!-- <button class="btn" type="submit" name="confirm">PROCEED TO PAYMENT</button> -->
    <!-- <button class="btn" type="submit" name="confirm">UPDATE APPOINTMENT TIME </button>
    <button class="btn" type="submit" name="confirm">VIEW MY APPOINTMENTS</button> -->
	</h4>
	</form>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>
	
</body>

</html>