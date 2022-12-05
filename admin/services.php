
<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adding Categories</title>
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

              <h2 class="fw-bold mb-2 text-uppercase">AVAILABLE SERVICES</h2>            
				<form action="../admin/add_service.php" method="POST">

					<div class="form-outline form-white mb-4">
                    <button class="btn btn-outline-light btn-lg px-5" name="add_service" type="submit">Add Services</button> 

					</div>
                
				</form>
       </div>
       <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Services</th>
        <th scope="col">Update Services</th>
      </tr>
      <?php
        include ("../controllers/service_controller.php");
        $data = getservices();
        foreach($data as $key => $value) {
            echo '<tr>
                    <td>
                        '. $value["service_name"] .'        
                    </td>
                    <td>
                        <form action="../actions/edit_service.php" method="POST">
                            <input type="text" name="new_service" required>
                            <input type="hidden" name="service_id" value="'. $value['service_id'] .'" required>
                            <input type="submit" name="update_categories" value="Update">
                        </form>
                    </td>
                </tr>';
        }
      ?>
    </thead>
    <tbody>

   
    </tbody>
  </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<head>
