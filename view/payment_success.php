<?php
include "../controllers/customer_controller.php";
session_start();
$total = $_GET['total'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://js.paystack.co/v1/inline.js"></script> 
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>      
    
</head>
<body>
    <div>
<h1>Services</h1>
                <?php

                $data= returnCustomerid_ctr($_SESSION['user_id']);
                
            
                $serv= get_user_appointment_ctr($_SESSION['user_id']);

            

                foreach($serv as $item){

                    ?>
                    <div class= 'edit'>
                        <div>
                           <?php echo($item['service_name']) ?>
                        </div>
                        
                        <div></div>
                        <img id="img1"  width="300" height="300" style='border-radius: 8px' src="<?php echo( $item['service_image']); ?>" alt="" srcset="">
                        <div>
                           <?php echo('$'); echo($item['service_price']); 
                           $total= $total+$item['service_price'];
                           ?>
                        </div> 
						                        
                        <div><a href="singleservice.php?bid=<?php echo( $item['service_id']); ?>">View Service</a></div>
                    </div>
                   

                    <?php
                }?>
                 <h1>Total price</h1>
                <?php

                echo("$".$total);
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
                   
                    
                        <button type="submit" onclick="payWithPaystack()"> Pay </button>
                   
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
</body>
</html>