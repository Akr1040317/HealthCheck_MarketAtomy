<?php 
session_start(); 
include('header.php');
if (!isset($_SESSION['email'])) 
{
  $_SESSION['msg'] = "You must log in first";
  header('location: index.php');
}

if (isset($_GET['logout'])) 
{
  session_destroy();
  unset($_SESSION['email']);
  header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Section 5 - Pre</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login3.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100  py-md-0">
    <div class="container ">
      <div class="card login-card">
        <div class="row no-gutters">
          
          <div class="col-md-12" style="text-align: center; background-color: #e0dbd3;">
            <div class="card-body">
              
                <div class="card-body pt-0" style="text-align: center; background-color: #e0dbd3;" >
                  <!-- Form -->
                    
                    
                    
                    <img style="height: auto; width: 100%; max-width: 525px;"  src="assets/sectionImages/section5.png" alt="logo" class="logo">
                    <h3 style="color: #FF5733; padding-top: 1rem;" class=" text-center login-title ">Section 5 - Business Milestone Achievements</h3>
                    <p><span style="font-size: 12pt;"><em><strong><span style="font-family: arial, helvetica, sans-serif;">This section will help us to understand what you have accomplished to date in your business</span></strong></em></span></p>
             <a href="section5.php"><button style="decoration: none; background-color: rgba(0, 255, 0, 0.4);" class="btn  btn-rounded btn-block my-4 waves-effect z-depth-0 "  name="begin">Begin Section 5</button></a>
                     
    
                </div>
                  
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

                 
