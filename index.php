<?php 
include('server.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/login.png" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              
                <div class="card-body px-lg-5 pt-0">
                  <!-- Form -->
                  <div class="brand-wrapper">
                    <img src="assets/images/BHA.png" alt="logo" class="logo">
                  </div>
                  <p class="login-card-description">Sign into your account</p>
                  <form class="text-center"action="index.php" method="POST">
                  <?php include('errors.php'); ?>
                      <!-- Email -->
                      <div class="md-form">
                          <input type="email"name="email" id="email" class="form-control" placeholder="E-mail">
                      </div>
                      <!-- Password -->
                      <div class="md-form">
                          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                      </div> 
                      <div class="d-flex justify-content-around">
                      
                      
                      </div>
                      <!-- Sign in button -->
                      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="login_user">Sign in</button>
                      <!-- Register -->
                      <div>
                        <!-- Forgot password -->
                        <p><a href="forgotpass.php" style="color: red;">Forgot password?</a>
                          <a href="register.php">Register here</a>
                          </p>
                    </div>
                      
                      <p>Powered by <a href="https://www.marketatomy.com/"><img class="powered" src="assets/images/Marketatomy.png" alt=""></a></p>
                </nav>
                  </form>
                  
                  <!-- Form -->
                  </div>
                  <p><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Application Design - Danna Olivo, MarketAtomy, LLC, Application Development – Akshat Rastogi. Copyright © 2020 MarketAtomy, LLC. 
                </p>
            </div>
             
          </div>
        </div>
      </div>
      
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
