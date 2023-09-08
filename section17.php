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
  <title>Section 17 - Pricing Models</title>
  
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/sections/section1.0.css">
</head>
<body >
  <main class="">
    <div class="container" style=" width: auto;padding-top: 30px;">
      <div class="form">
        <div class="row no-gutters" style=" width: auto;">
        <div class="col-md-12" style=" width: auto;" >
            <div class="card-body" style="border-radius: 5%; background-color: #e0dbd3; width: auto;  ">
            <div class="" syle="width: auto;">
                        <h1 class=" text-center login-title text-dark" style="font-size: 40px;">Section 17 - Pricing Models<h1>
                        <p class=" text-center p-1 m-0 font-ubuntu text-black-50">This section will help us to understand the profitability potential for your company.</p>
                      </div>
              <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store17.php" method="post" class="form-section">

				  	<div class="">
                    	<label>Does the company  have robust pricing models for all its products?</label>
                    </div>
                    <div align="" >
                    	<input type = "radio" name = "17-1"class="" value="1" required>Yes
						<br><input  type = "radio" name = "17-1" class="" value="0" required>No
						<br><input  type = "radio" name = "17-1" class="" value="0" required>Don't know

					</div>
<br>
          <div class="">
                    	<label>Do you have a clear idea of your unit costs of production?</label>
                    </div>
                    <div align="" >
                    	<input type = "radio" name = "17-2"class="" value="1" required>Yes
						<br><input  type = "radio" name = "17-2" class="" value="0" required>No
						<br><input  type = "radio" name = "17-2" class="" value="0" required>Don't know

					</div>
<br>
                    <div class="">
						<label>Are you selling to wholesalers/retailers/public directly? (Check all that apply)</label>
					</div>
                    <input type="checkbox" name="17-3[]" value="1" >Wholesale 
					<br><input type="checkbox" name="17-3[]" value="1" >Retail
					<br><input type="checkbox" name="17-3[]" value="1" >Consumer 
                    <br><input type="checkbox" name="17-3[]" value="0" >Not applicable
                    
                    <br>
                    <br>
                    <div class="">
                    	<label>Is your pricing model dictated by competition or by profit goals?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "17-4"class="" value="1" required>Competition
						<br><input  type = "radio" name = "17-4" class="" value="2" required>Profit
            <br><input  type = "radio" name = "17-4" class="" value="0" required>Don't know

						
					</div>
<br>
                    <div class="">
                    	<label>If product based, do you offer value-added "services" in addition to the company's offerings?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "17-5"class="" value="1" required>Yes
						<br><input  type = "radio" name = "17-5" class="" value="0" required>No
            <br><input  type = "radio" name = "17-5" class="" value="0" required>Don't know
						
					</div>
<br>
                      
                    <a href="section18pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                  <br>
               
                
                
              </div>
              <div style="text-align: center;">
              <p><em>That's it for Section 17! You are coming down the home stretch!</em></p>
              <p><span style="color: #ff6600;"><em><strong>End of Section 17 - Pricing Models</strong></em></span></p>
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
