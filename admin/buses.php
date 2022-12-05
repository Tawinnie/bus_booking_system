
<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Buses</title>

    <style>
   body {
  background: #eecda3;
  background: -webkit-linear-gradient(to right, #eecda3, #ef629f);
  background: linear-gradient(to right, #eecda3, #ef629f);
  min-height: 100vh;
   }
.feedback {
  background-color : #4CAF50;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
}

#mybutton {
  position: fixed;
  align-content: -4px;
  right: 10px;
}
.btn{
  background-color : #008CBA;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
}

#shop {
  position: fixed;
  align-content: -4px;
  left: 10px;
}
    </style>
</head>
<body>
  <nav class="navbar navbar-light bg-light justify-content-between">

      <div id="mybutton">
        <button type="button" onclick="window.location.href='add_bus.php'" class="feedback">ADD MORE BUSES</button>
        </div>

      <header id="header" class="fixed-top d-flex align-items-center header-transparent">
          <div class="container d-flex align-items-center">
              </header>
</nav>   
<div class="px-4 px-lg-0">
  <!-- For demo purpose -->
  <div class="container text-white py-5 text-center">
    <h1 class="display-4">Available Buses</h1>
    <p class="lead mb-0">Find and Edit available buses</p>
    <!-- <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white font-italic"> -->
            <!-- <u>Bootstrapious</u></a> -->
    </p>
  </div>

<div class="container">
    <div class="row">
        <div class="col-12">
         <table class="table table-bordered">
            <thead>
               <tr>
                <th scope="col">Bus Name</th>
                <th scope="col">Route</th>
                <th scope="col">Time</th>
                <th scope="col">Price</th>
                <th scope="col">Luggage</th>
                <th scope="col">Seats</th>

                <!-- <th scope="col">UpdCatego</th> -->
            </tr>
</thead>
<tbody>
      <?php
        include ("../controllers/bus_controller.php");
        $data = displaybuses();
        foreach($data as $key => $value) {
            echo '<tr>
                    <td>
                        '. $value["bus_name"] .'     
                    
                    </td>
                    <td>
                        '. $value["route"] .'     
                    
                    </td>
                    <td>
                    '. $value["departure_time"] .'     
                
                </td>
                    <td>
                        '. $value["seats"] .'     
                    
                    </td>
                    <td>
                        '. $value["price"] .'     
                    
                    </td>
                    <td>
                        '. $value["luggage"] .'     
                    
                    </td>
                    
                        <form action="../actions/edit_bus.php" method="POST">
                      <td>  <input type="text" name="new_bus_name" placeholder="Enter new bus name" required> </td>
                          <td>  <input type="text" name="new_route" placeholder="Enter new route" required> </td>
                          <td>  <input type="text" name="new_time" placeholder="Enter new_departure_time" required> </td>
                          <td>  <input type="text" name="new_seats" placeholder="Enter new seats" required> </td>
                           <td> <input type="text" name="new_price" placeholder="Enter new price" required> </td>
                          <td>  <input type="text" name="new_luggae" placeholder="Enter new luggage" required> </td>
                            <input type="hidden" name="bus_id" value="'. $value['bus_id'] .'" required>
                         <td>   <input class="btn red" type="submit" name="update_bus" value="Update"> </td>
                         <td>   <input class="btn danger" type="submit" name="delete_bus" value="Delete"> </td>

                        </form>
                    
                </tr>';
        }
      ?>
   
</tbody>
     </body>
</html>