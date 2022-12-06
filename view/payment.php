<?php
include "../controllers/customer_controller.php";
session_start();
$total = $_GET['total'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>99 Buses</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script src="https://js.paystack.co/v1/inline.js"></script> 
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>      
    
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
            <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>99 Buses</h2>
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
                    <a class="signup__link" href="../view/payment.php"></a> <h3 class="text-white mb-4 align-center"> SERVICES YOU HAVE BOOKED </h3>
                        <!-- <h1 class="text-white mb-4 align-center">Certified and Award Winning Car Repair Service Provider</h1> -->
                        <p class="text-white mb-0 align-center">Thank you for choosing us.</p>
    
                <!-- <h1>Services</h1> -->
                <?php

                $data= returnCustomerid_ctr($_SESSION['customer_id']);
                
            
                $serv= get_user_appointment_ctr($_SESSION['customer_id']);

            

                foreach($serv as $item){

                    ?>
                    <div class= 'edit'>
                        <div>
                           <?php echo($item['service_name']) ?>
                        </div>
                        
                        <div></div>
                        <!-- <img id="img1"  width="300" height="300" style='border-radius: 8px' src="<?php echo( $item['service_image']); ?>" alt="" srcset=""> -->
                        <div>
                           <?php echo('GHC ');
                           echo($item['service_price']); 
                           $total= $total+$item['service_price'];
                           ?>
                        </div> 
						                        
                        <div><a href="singleservice.php?bid=<?php echo( $item['service_id']); ?>">View Service</a></div>
                    
                   

                    <?php
                }?>
                    <h1 class="text-white mb-4 align-center"> Total Price </h1>
                <?php

                echo("GHC ".$total);
                ?>
               <form id="paymentForm" method='post'>
                    <div class="form-group">

                        <input type="email" id="email-address" hidden required value="<?php echo $data['customer_email']?>"/>
                    </div>
                    <div class="form-group">
                        <input type="number" id="amount" hidden required value="<?php echo $total?>"/>
                    </div>
                    <div class="form-group">
                        <input type="text" id="first-name" hidden value="<?php echo $data['customer_name']?>"/>
                    </div>
                    <div class="form-group">
                        <input type="number" id="customer-Id" hidden value="<?php echo $data['customer_id']?>"/>
                    </div>
                   
                    
                        <button type="submit"  class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" onclick="payWithPaystack()">Pay Now<i class="fa fa-arrow-right ms-3"></i></button>
                   
                    </form>
                     <!-- <script src="payment.js"></script> -->
                    <script type="text/javascript">
     
  
function payWithPaystack() {
  event.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1),
    currency:'GHS',
     // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
    
      if(response.status == "success"){
      
        email= document.getElementById("email-address").value;
        amount= document.getElementById("amount").value;
        
        
        


        dataString = 'email='+ email +'&amount='+amount+'&ref='+response.reference+'&res='+response.status;
        $.ajax({
            type:"POST",
            url:"../actions/payment_process.php",
            data: dataString,
            cache:false,
            success:function(result){
                alert(result);
            }
        })
        window.location = "payment_success.php";
      
    }else{
        window.location = "payment_failed.php";
    }
      alert(message);
    }
  });
  handler.openIframe();
}
                    </script>
                 

    </div>

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
</html>