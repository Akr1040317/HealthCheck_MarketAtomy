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
  <title>Welcome</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login3.css">
</head>
<body >
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container" style="padding-top: 1rem;">
      <div class="card login-card">
        <div class="row no-gutters">
          
          <div class="col-md-12">
            <div class="card-body">
              
              <div class="card-body px-lg-5 pt-0" style="text-align: center" >
                  <!-- Form -->
                  
                  <br><br>
                  <img src="assets/images/Logopic.png" alt="logo" style="height:10rem;">
                  <img src="assets/images/company.png" alt="logo" style="height:6rem; "class="logo_name">
                  <h2 style="text-align: center; padding-top: 30px;"><span style=" font-family: impact, sans-serif;">Small Business Health Check Questionnaire</span></h2>
                  <p style = "padding-top: 45px;"><span style="font-family: arial, helvetica, sans-serif; font-size: 12pt; ">This questionnaire is the first phase of MarketAtomy's <em><span style="color: #ff6600;"><strong>Small Business Check Up</strong></span></em> Program. Please answer each question as accurately as possible so that our analysis of your answers leads us to come up with a diagnosis which is pertinent and relevant for you.</span></p>
                  <p><span style="font-family: arial, helvetica, sans-serif; font-size: 12pt;">Please allow 20-30 minutes of un-interrupted time and answer all questions.</span></p>
                  <a href="section1pre.php"><button class="btn  btn-rounded btn-block my-4 waves-effect z-depth-0 " style="decoration: none; background-color: rgba(0, 255, 0, 0.4);" name="begin">Begin</button></a>
                  <p><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Application Design - Danna Olivo, MarketAtomy, LLC, Application Development – Akshat Rastogi. Copyright © 2020 MarketAtomy, LLC. All rights reserved. No part of this application may be reproduced, distributed, or transmitted in any form or by any means, including photocopying, recording, or other electronic or mechanical methods, without the prior written permission of MarketAtomy, LLC. For permission requests, write to MarketAtomy LLC, addressed “Attention: Permissions Coordinator,” at the address below.</span></p>
                  <p><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">MarketAtomy, LLC 10151 University Boulevard Suite 346 Orlando, FL 32817 www.marketatomy.com
</span></p>
                  
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

               
