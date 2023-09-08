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
  <title>Section 19</title>
  
 
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

                        <h1 class=" text-center login-title text-dark" style="font-size: 40px;">Section 19 - Production (For Manufacturing Companies)<h1>
                        <p class=" text-center p-1 m-0 font-ubuntu text-black-50">This section will help us to understand the production processes in place along with quality control and safety measures.</p>
                      </div>
					  <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store19.php" method="post" class="form-section">

				  	<div class="">
                    	<label>Are you a Manufacturing Company?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-1"class="" value="1" required>Yes
						<br><input  type = "radio" name = "19-1" class="" value="0" required>No
						
					</div>
<br>
					<div class="">
                    	<label>When are your products manufactured?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-2"class="" value="2" required>Within the United States
						<br><input  type = "radio" name = "19-2" class="" value="1" required>Outside of the United States
						<br><input  type = "radio" name = "19-2" class="" value="3" required>Both
            <br><input  type = "radio" name = "19-2" class="" value="0" required>N/A

					</div>
<br>
					<div class="">
                    	<label>Are you satisfied with your manufacturing operations?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-3"class="" value="2" required>Yes
						<br><input  type = "radio" name = "19-3" class="" value="1" required>No
            <br><input  type = "radio" name = "19-3" class="" value="0" required>N/A
						
					</div>
<br>
					<div class="">
                    	<label>Are you satisfied with your costs of production?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-4"class="" value="1" required>Yes
						<br><input  type = "radio" name = "19-4" class="" value="1" required>No
						<br><input  type = "radio" name = "19-4" class="" value="0" required>N/A
						
            </div>
<br>
					<div class="">
                    	<label>Do you suffer from quality control issues?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-5"class="" value="1" required>Yes
						<br><input  type = "radio" name = "19-5" class="" value="0" required>No
						<br><input  type = "radio" name = "19-5" class="" value="0" required>N/A

					</div>
<br>
          <div class="">
                    	<label>If manufacturing overseas, do you have a local rep looking after you?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-6"class="" value="1" required>Yes
						<br><input  type = "radio" name = "19-6" class="" value="0" required>No
						<br><input  type = "radio" name = "19-6" class="" value="0" required>N/A

					</div>
<br>
          <div class="">
                    	<label>Are you always able to fulfill order on time?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-7"class="" value="1" required>Yes
						<br><input  type = "radio" name = "19-7" class="" value="0" required>No
						<br><input  type = "radio" name = "19-7" class="" value="0" required>N/A

					</div>
<br>
          <div class="">
                    	<label>Do you have problems sourcing supplies and raw materials?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-8"class="" value="-1" required>Yes
						<br><input  type = "radio" name = "19-8" class="" value="1" required>No
						<br><input  type = "radio" name = "19-8" class="" value="0" required>N/A

					</div>
<br>
          <div class="">
                    	<label>How much control do you have over the manufacturing process?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-9"class="" value="0" required>0%
						<br><input  type = "radio" name = "19-9" class="" value="1" required>20%
						<br><input  type = "radio" name = "19-9" class="" value="2" required>40%
            <br><input  type = "radio" name = "19-9" class="" value="3" required>60%
            <br><input  type = "radio" name = "19-9" class="" value="4" required>80%
            <br><input  type = "radio" name = "19-9" class="" value="5" required>100%
            <br><input  type = "radio" name = "19-9" class="" value="0" required>N/A

					</div>
<br>
          <div class="">
                    	<label>Do you receive satisfactory credit terms from your suppliers?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-10"class="" value="1" required>Yes
						<br><input  type = "radio" name = "19-10" class="" value="0" required>No
						<br><input  type = "radio" name = "19-10" class="" value="" required>N/A

					</div>
<br>
          <div class="">
                    	<label>Are you normally able to pay creditors on time?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-11"class="" value="1" required>Yes
						<br><input  type = "radio" name = "19-11" class="" value="0" required>No
						<br><input  type = "radio" name = "19-11" class="" value="0" required>N/A

					</div>
<br>
          <div class="">
                    	<label>Are you governed by Health & Safety or other regulatory matters?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-12"class="" value="1" required>Yes
						<br><input  type = "radio" name = "19-12" class="" value="0" required>No
            <br><input  type = "radio" name = "19-12" class="" value="0" required>N/A

					</div>
<br>
          <div class="">
                    	<label>Are you in compliance with all appropriate regulations and laws?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-13"class="" value="1" required>Yes
						<br><input  type = "radio" name = "19-13" class="" value="0" required>No
						<br><input  type = "radio" name = "19-13" class="" value="0" required>N/A

					</div>
<br>
          <div class="">
                    	<label>Are your company's internal production processes robust?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-14"class="" value="2" required>Yes
						<br><input  type = "radio" name = "19-14" class="" value="1" required>No
						<br><input  type = "radio" name = "19-14" class="" value="0" required>N/A

					</div>
<br>
          <div class="">
                    	<label>How engaged is your company regarding new product development?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-15"class="" value="0" required>No Products in Pipeline
						<br><input  type = "radio" name = "19-15" class="" value="1" required>Thinking about some products
						<br><input  type = "radio" name = "19-15" class="" value="2" required>At least 1 product in Pipeline
            <br><input  type = "radio" name = "19-15" class="" value="3" required>Multiple Products in Pipeline
            <br><input  type = "radio" name = "19-15" class="" value="0" required>N/A

          </div>
<br>
          <div class="">
                    	<label>Is anyone responsible for new product development?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "19-16"class="" value="1" required>Yes
						<br><input  type = "radio" name = "19-16" class="" value="0" required>No
						<br><input  type = "radio" name = "19-16" class="" value="0" required>N/A

					</div>
                      

                      <br>
                    <a href="section20pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                 
               
                
                
              </div>
              <div style="text-align: center;">
              <p><em>That's a wrap for section 19. Just a few more to go!</em></p>
              <p><span style="color: #ff6600;"><em><strong>End of Section 19 - Production (For Manufacturing Companies) </strong></em></span></p>
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
