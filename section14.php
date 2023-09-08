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
  <title>Section 14 - Market Dynamics</title>
  
 
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
                        <h1 class=" text-center login-title text-dark" style="font-size: 40px;">Section 14 - Market Dynamics<h1>
                        <p class=" text-center p-1 m-0 font-ubuntu text-black-50">This section will help us to understand how well you know your market and whether the demand is sufficient to support your goals.</p>
                      </div>
                      <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store14.php" method="post" class="form-section">

				  	<div class="">
                    	<label>How well defined is your market on a scale of 1 to 5?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "14-1"class="" value="0" required>1 = Loosely Defined
						<br><input  type = "radio" name = "14-1" class="" value="1" required>2
            <br><input  type = "radio" name = "14-1" class="" value="2" required>3
            <br><input  type = "radio" name = "14-1" class="" value="3" required>4
						<br><input  type = "radio" name = "14-1" class="" value="4" required>5 = Niche Defined

					</div>
<br>
					<div class="">
                    	<label>Do you consider your company to have an established presence in its markets?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "14-2"class="" value="1" required>Yes
						<br><input  type = "radio" name = "14-2" class="" value="0" required>No

					</div>
<br>
					<div class="">
                    	<label>How well do you feel you have penetrated those markets?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "14-3"class="" value="0" required>1 = No Penetration
						<br><input  type = "radio" name = "14-3" class="" value="1" required>2
            <br><input  type = "radio" name = "14-3" class="" value="2" required>3
            <br><input  type = "radio" name = "14-3" class="" value="3" required>4
            <br><input  type = "radio" name = "14-3" class="" value="4" required>5 = Saturated
						
					</div>
<br>
					<div class="">
                    	<label>Have you conducted a Strenghts, Weakness, Opportunities and Threats (S.W.O.T.) analysis on your business?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "14-4"class="" value="1" required>Yes
						<br><input  type = "radio" name = "14-4" class="" value="0" required>No
						<br><input  type = "radio" name = "14-4" class="" value="0" required>Don't know
						
            </div>
<br>
					<div class="">
                    	<label>Have you identified your primary comWellpetitive advantage?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "14-5"class="" value="1" required>Yes
						<br><input  type = "radio" name = "14-5" class="" value="0" required>No
            <br><input  type = "radio" name = "14-5" class="" value="0" required>Don't know
						
					</div>
<br>
          <div class="">
                    	<label>Do you have a plan to overcome your competitive advantages?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "14-6"class="" value="1" required>Yes
						<br><input  type = "radio" name = "14-6" class="" value="0" required>No
            <br><input  type = "radio" name = "14-6" class="" value="0" required>Don't know

					</div>
<br>
          <div class="">
                    	<label>Do you have serious competition?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "14-7"class="" value="1" required>Yes
						<br><input  type = "radio" name = "14-7" class="" value="0" required>No
            <br><input  type = "radio" name = "14-7" class="" value="0" required>Don't know
						
					</div>
<br>
          <div class="">
                    	<label>Are they powerhouse companies with massive resources you cannot match?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "14-8"class="" value="1" required>Yes
						<br><input  type = "radio" name = "14-8" class="" value="0" required>No
						<br><input  type = "radio" name = "14-8" class="" value="0" required>Don't know

					</div>
<br>
          <div class="">
                    	<label>How do your competitors see you in your markets?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "14-9"class="" value="0" required>Not aware of us
						<br><input  type = "radio" name = "14-9" class="" value="0" required>Insignificant player
            <br><input  type = "radio" name = "14-9" class="" value="1" required>Significant player
            <br><input  type = "radio" name = "14-9" class="" value="2" required>Significant threat
            <br><input  type = "radio" name = "14-9" class="" value="0" required>Don't know

					</div>
<br>
          <div class="">
                    	<label>Do you have a handle on market trends effecting your business?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "14-10"class="" value="1" required>Yes
						<br><input  type = "radio" name = "14-10" class="" value="0" required>No
						<br><input  type = "radio" name = "14-10" class="" value="0" required>Don't know

					</div>
<br>
          <div class="">
                    	<label>Do these represent opportunities or threats to the business in the future?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "14-11"class="" value="2" required>Opportunities
						<br><input  type = "radio" name = "14-11" class="" value="1" required>Threats
						<br><input  type = "radio" name = "14-11" class="" value="3" required>Both
            <br><input  type = "radio" name = "14-11" class="" value="0" required>Other

					</div>
<br>
          <div class="">
                    	<label>Is your market well-known, or will you be required to educated your market as to the problem that needs to be solved first?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "14-12"class="" value="4" required>Issue well known
						<br><input  type = "radio" name = "14-12" class="" value="2" required>Need to educate market
						<br><input  type = "radio" name = "14-12" class="" value="3" required>Modest market awareness
            <br><input  type = "radio" name = "14-12" class="" value="1" required>Brand new market need

					</div>

                      

                      <br>
                    <a href="section20pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
               
               
                
                
              </div>
              <div style="text-align: center;">
              <p><span style="font-family: arial, helvetica, sans-serif; font-size: 12pt;"><em>Thats a wrap for Section 14! </em></span></p>
              <p><span style="font-family: arial, helvetica, sans-serif; font-size: 12pt;"><em>Protip: Two key questions to ask when you are tackling incumbent competitors... 1. How is their bread buttered? 2. What is it they can't afford to say or think?</em></span></p>
              <p><span style="color: #ff6600;"><em><strong>End of Section 14 - Market Dynamics</strong></em></span></p>
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
