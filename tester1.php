<?php 
	session_start(); 
	include('header.php');
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Section 1</title>
  
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/sections/section1.0.css">
</head>
<body >
  <main class="">
    <div class="container" style="float:center; width: 1000px;padding-top: 30px;">
      <div class="form">
        <div class="row no-gutters" style="float:center; width: 1000px;">
        <div class="col-md-12" style="float:center; width: 1000px;" >
            <div class="card-body" style="border-radius: 5%; background-color: #e0dbd3; width: 1000px; float: center; ">
            <div class="" syle="width: 1000px;">
                        <h1 class=" text-center login-title text-dark" style="font-size: 40px;">Section 1 - Business information<h1>
                        <p class=" text-center p-1 m-0 font-ubuntu text-black-50">Please provide us with the following general information about your business.</p>
                      </div>
              <div style="padding-left: 26%;">
                
                  <form action="health.php" method="post" class="form-section">
                      
                      <div class = "row">
                      
                          <label>What is the name of your business?</label>
                          <input type="text" name="business" class="form-control" placeholder="Name of business" required>
                      </div>

                      
                      <a><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                  <br>
               
                
                
              </div>
              <div style="text-align: center;">
                <p><span style="font-size: 12pt;"><em><span style="font-family: arial, helvetica, sans-serif;">That's it for section one! You've done awesome so far! Did you know that businesses who take the time to answer detailed questions have an 85% greater chance of success than ones who</span><span style="font-family: arial, helvetica, sans-serif;"> don't?</span></em></span></p>
                <p><span style="color: #ff6600;"><em><strong>End of Section 1 - Business Information</strong></em></span></p>
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
