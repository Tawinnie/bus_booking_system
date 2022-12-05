<?php ?>
<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your Email and password!</p>
            
				<form action="../actions/process_login.php" method="POST">
        <div class="form-outline form-white mb-4">
						<input type="text" name="customer_email" id="typeEmailX" class="form-control form-control-lg" />
						<label class="form-label" for="typeEmailX">Email</label>
					</div>
					
					<div class="form-outline form-white mb-4">
						<input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
						<label class="form-label" for="typePasswordX">Password</label>
					</div>

					<p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

					<button class="btn btn-outline-light btn-lg px-5" name="login" type="submit">Login</button>

					<div class="d-flex justify-content-center text-center mt-4 pt-1">
						<a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
						<a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
						<a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
					</div>
				</form>
            </div>

            <div>
              <!-- <p class="mb-0">Don't have an account? <a href="register.php" class="text-white-50 fw-bold">Sign Up</a>
              </p> -->
              <p class="mb-0">Don't have an account?<a href="register.php"><u>Create a new account</u></a>
              </p>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<html>
<head>




