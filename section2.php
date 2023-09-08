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
  <title>Section 2 - Business Preparation</title>
  
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/sections/section1.0.css">
</head>
<body >
  <main class="">
  <div class="container" style=" width: auto;padding-top: 30px; padding-bottom:30px;">
      <div class="form">
        <div class="row no-gutters" style=" width: auto;">
        <div class="col-md-12" style=" width: auto;" >
            <div class="card-body" style="border-radius: 5%; background-color: #e0dbd3; width: auto;  ">
            <div class="" syle="width: auto;">
                        <h1 class=" text-center login-title text-dark" style="font-size: 40px;">Section 2 - Business Preparation<h1>
                        <p class=" text-center p-1 m-0 font-ubuntu text-black-50">The following questions will provide us with an understanding about how you prepared before setting up your business.</p>
                      </div>
			<div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store2.php" method="post" class="form-section">

				  	<div class="">
                    	<label>Do you currently have a Vision Statement for your business?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "2-1"class="" value="2" required>Yes
						<br><input  type = "radio" name = "2-1" class="" value="1" required>No
						<br><input  type = "radio" name = "2-1" class="" value="0" required>Don't know
					
					</div>

					<div class="">
                    	<label>Do you currently have a Mission Statement for your business?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "2-2"class="" value="2" required>Yes
						<br><input  type = "radio" name = "2-2" class="" value="1" required>No
						<br><input  type = "radio" name = "2-2" class="" value="0" required>Don't know
					
					</div>

					<div class="">
                    	<label>Have you created a Business Model for your business?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "2-3"class="" value="2" required>Yes
						<br><input  type = "radio" name = "2-3" class="" value="1" required>No
						<br><input  type = "radio" name = "2-3" class="" value="0" required>Not sure
					
					</div>

					<div class="">
                    	<label>Have you created a Financial Model for your business?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "2-4"class="" value="2" required>Yes
						<br><input  type = "radio" name = "2-4" class="" value="1" required>No
						<br><input  type = "radio" name = "2-4" class="" value="0" required>Not sure
					
					</div>

					<div class="">
                    	<label>Have you created a Product/Service Pricing Model for your business?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "2-5"class="" value="2" required>Yes
						<br><input  type = "radio" name = "2-5" class="" value="1" required>No
					
					</div>

					<div class="">
                    	<label>Have you created a Go-To-Market Strategy for your business?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "2-6"class="" value="2" required>Yes
						<br><input  type = "radio" name = "2-6" class="" value="1" required>No
						<br><input  type = "radio" name = "2-6" class="" value="0" required>Not Applicable
					</div>

					<div class="">
                    	<label>Have you created a One-Page Investor Summary for your business?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "2-7"class="" value="2" required>Yes
						<br><input  type = "radio" name = "2-7" class="" value="1" required>No
						<br><input  type = "radio" name = "2-7" class="" value="0" required>Not Applicable
					</div>

					<div class="">
                    	<label>Have you created a Private Placement memorandum (PPM)  for your business?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "2-8"class="" value="2" required>Yes
						<br><input  type = "radio" name = "2-8" class="" value="1" required>No
						<br><input  type = "radio" name = "2-8" class="" value="0" required>What is that?
					</div>

					<div class="">
                    	<label>Have you created a Forward Looking (Save Harbor) Statement for your business?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "2-9"class="" value="2" required>Yes
						<br><input  type = "radio" name = "2-9" class="" value="1" required>No
						<br><input  type = "radio" name = "2-9" class="" value="0" required>What is that?
					</div>

					<div class="">
                    	<label>If not, how long do you predict it will take to go there?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "2-10"class="" value="3" required>Less than 12 months
						<br><input  type = "radio" name = "2-10" class="" value="2" required>Within 13-18 months
						<br><input  type = "radio" name = "2-10" class="" value="1" required>Within 19-24 months
						<br><input  type = "radio" name = "2-10" class="" value="0" required>Not applicable
					</div>


                    <div class="">
						<label>What are some of the key problems you see with your business right now? (Check all that apply)</label>
					</div>
                    <input type="checkbox" name="2-11[]" value="-1" >Lack of Capital 
					<br><input type="checkbox" name="2-11[]" value="-0.25" >Lack of Focus 
					<br><input type="checkbox" name="2-11[]" value="-0.5" >Lack of Customers
					<br><input type="checkbox" name="2-11[]" value="-0.25" >Lack of Skills 
                    <br><input type="checkbox" name="2-11[]" value="-0.25" >Lack of Cost Control
					<br><input type="checkbox" name="2-11[]" value="-0.75" >Lack of Management/Leadership
					<br><input type="checkbox" name="2-11[]" value="0" >Other 
                    <br><input type="checkbox" name="2-11[]" value="-0.25" >None really
                    
                    <br>
                    
                    <br>
					
                    <a href="section3pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                  
               
                
                
              </div>
              <div style="text-align: center;">
              <p><em>Way to go! You've completed Section 2, and you're well on your way to success. Did you know that by answering many of the same questions you just did, Warren Buffett was able to build Berkshire Hathaway into a company that touches 90 percent of your life each day?</em></p>
			  <p><span style="color: #ff6600;"><em><strong>End of Section 2&nbsp;- Business&nbsp;Preparation</strong></em></span></p>

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
