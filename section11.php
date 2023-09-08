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
  <title>Section 11 - Revenue</title>
  
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/sections/section1.0.css">
</head>
<body >
  <main class="">
  <div class="container" style=" width: auto;padding-top: 30px; padding-bottom:30px;">
      <div class="form">
        <div class=" no-gutters" style=" width: auto;">
        <div class="col-md-12" style=" width: auto;" >
            <div class="card-body" style="border-radius: 5%; background-color: #e0dbd3; width: auto;  ">
            <div class="" syle="width: auto;">
            <h3 style="color: #FF5733; padding-top: 1rem;" class=" text-center login-title ">Section 11 - Revenue</h3>
                    <p><span style="font-size: 12pt;"><em><strong><span style="font-family: arial, helvetica, sans-serif;">This section will help us to evaluate current, realistic and potential revenue options for your business.</span></strong></em></span></p>
             </div>
             <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store11.php" method="post" class="form-section">
                      
                    
                    <div class="">
                      <label>Do you currently have more than ONE revenue stream?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "revStream"class="" value="2" required>Yes
                      <br><input  type = "radio" name = "revStream" class="" value="1" required>No
                     </div>
<br>
                     <div class="">
                      <label>Are you planning to increase the number of revenue streams?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "revStreamInc"class="" value="2" required>Yes
                      <br><input  type = "radio" name = "revStreamInc" class="" value="1" required>No
                      <br><input  type = "radio" name = "revStreamInc" class="" value="0" required>Not sure
                     </div>
<br>
                     <div class="">
                      <label>Are your sales patterns consistent or cyclical?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "salesPatterns"class="" value="2" required>Consistent
                      <br><input  type = "radio" name = "salesPatterns" class="" value="1" required>Cyclical
                      <br><input  type = "radio" name = "salesPatterns" class="" value="0" required>Don't know
                     </div>
<br>
                     <div class="">
                      <label>Are you happy with the performance of all the revenue streams?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "performance"class="" value="3" required>Yes
                      <br><input  type = "radio" name = "performance" class="" value="2" required>No
                      <br><input  type = "radio" name = "performance" class="" value="1" required>Could be better
                      <br><input  type = "radio" name = "performance" class="" value="0" required>Other
                     </div>
<br>
                     <div class="">
                      <label>How realistic is it to develop additional revenue streams (on a scale of 1 to 5)?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "realistic"class="" value="0" required>Unrealistic = 1
                      <br><input  type = "radio" name = "realistic" class="" value="1" required>2
                      <br><input  type = "radio" name = "realistic" class="" value="2" required>3
                      <br><input  type = "radio" name = "realistic" class="" value="3" required>4
                      <br><input  type = "radio" name = "realistic" class="" value="4" required>Very realistic = 5
                     </div>
                    <br>
                     <div class="">
                      <label>What are the limiting factors for developing additional revenue streams? (Check all that apply)</label>
                    </div>
                    <input type="checkbox" name="limitingFactors[]" value="1" >Money 
                    <br><input type="checkbox" name="limitingFactors[]" value="1" >People 
                    <br><input type="checkbox" name="limitingFactors[]" value="1" >Technology
                    <br><input type="checkbox" name="limitingFactors[]" value="1" >Competition 
                    <br><input type="checkbox" name="limitingFactors[]" value="1" >Knowledge
                    <br><input type="checkbox" name = "limitingFactors[]" value="1">Other
                    
                    <br> 

                      <a href="section12pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                 
               
                
                
              </div>
              <div style="text-align: center;">
              <p><em>Section 11, done! When you understand what revenue streams you have, you're also able to see others that you may not have thought about.</em></p>
               <p><span style="color: #ff6600;"><em><strong>End of Section 11 - Revenue</strong></em></span></p>
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
