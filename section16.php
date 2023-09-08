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
  <title>Section 16 - Financial Management</title>
  
 
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
                        <h1 class=" text-center login-title text-dark" style="font-size: 40px;">Section 16 - Financial Management<h1>
                        <p class=" text-center p-1 m-0 font-ubuntu text-black-50">This section will help us to get a better understanding of the current financial snapshot for your business</p>
                      </div>
				
				<div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store16.php" method="post" class="form-section">

				  	<div class="">
                    	<label>Have you been actively maintaining ongoing record keeping for financial purposes?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-1"class="" value="1" required>Yes
						<br><input  type = "radio" name = "16-1" class="" value="0" required>No
						
					</div>
<br>
					<div class="">
                    	<label>Do you have internal bookkeeping capabilities?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-2"class="" value="1" required>Yes
						<br><input  type = "radio" name = "16-2" class="" value="0" required>No
						
					</div>
<br>
					<div class="">
                    	<label>Do you have internal accounting staff or is out-sourced?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-3"class="" value="2" required>In-house
						<br><input  type = "radio" name = "16-3" class="" value="2" required>Outsourced
            <br><input  type = "radio" name = "16-3" class="" value="1" required>Do it myself
						
					</div>
<br>
					<div class="">
                    	<label>Do you employ an external CPA or accountant to prepare tax returns?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-4"class="" value="1" required>Yes
						<br><input  type = "radio" name = "16-4" class="" value="0" required>No
						
					</div>
<br>
					<div class="">
                    	<label>Do you feel you have liquidity issues or cash flow problems?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-5"class="" value="-1" required>Yes
						<br><input  type = "radio" name = "16-5" class="" value="1" required>No
						
					</div>
<br>
          <div class="">
                    	<label>Do you have the bank facilities and relationships in place to support cash flows?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-6"class="" value="1" required>Yes
						<br><input  type = "radio" name = "16-6" class="" value="0" required>No
						
					</div>
<br>
          <div class="">
                    	<label>Does the company carry any debt? (excluding equity investors)</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-7"class="" value="-1" required>Yes
						<br><input  type = "radio" name = "16-7" class="" value="1" required>No
						
					</div>
<br>
          <div class="">
                    	<label>If so, how much?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-8"class="" value="5" required>Less than $10,000
						<br><input  type = "radio" name = "16-8" class="" value="4" required>Between $11,000 and $25,000
            <br><input  type = "radio" name = "16-8" class="" value="3" required>Between $26,000 and $50,000
            <br><input  type = "radio" name = "16-8" class="" value="2" required>Between $51,000 and $100,000
            <br><input  type = "radio" name = "16-8" class="" value="1" required>Over $100,000
						
					</div>
<br>
          <div class="">
                    	<label>Are you happy with the current banking relationship?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-9"class="" value="1" required>Yes
						<br><input  type = "radio" name = "16-9" class="" value="0" required>No
						
					</div>
<br>
          <div class="">
                    	<label>Is your company profitable?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-10"class="" value="1" required>Yes
						<br><input  type = "radio" name = "16-10" class="" value="0" required>No
						<br><input  type = "radio" name = "16-10" class="" value="0" required>Not Applicable

					</div>
<br>
          <div class="">
                    	<label>Have you reached breakeven?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-11"class="" value="1" required>Yes
						<br><input  type = "radio" name = "16-11" class="" value="0" required>No
						<br><input  type = "radio" name = "16-11" class="" value="0" required>Not Applicable

					</div>
<br>
          <div class="">
                    	<label>Are you able to determine if all your product or service lines make money?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-12"class="" value="1" required>Yes
						<br><input  type = "radio" name = "16-12" class="" value="0" required>No
						<br><input  type = "radio" name = "16-12" class="" value="0" required>Don't know

					</div>
<br>
          <div class="">
                    	<label>How closely do you monitor cash flows?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-13"class="" value="0" required>Terribly
						<br><input  type = "radio" name = "16-13" class="" value="1" required>Inconsistently
						<br><input  type = "radio" name = "16-13" class="" value="2" required>Consistently
            <br><input  type = "radio" name = "16-13" class="" value="3" required>Swimmingly

					</div>
<br>
          <div class="">
                    	<label>Do you have an internal financial management system that you use?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-14"class="" value="1" required>Yes
						<br><input  type = "radio" name = "16-14" class="" value="0" required>No
						<br><input  type = "radio" name = "16-14" class="" value="0" required>Don't know

					</div>
<br>
          <div class="">
                    	<label>Does your company produce annual budgets?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-15"class="" value="1" required>Yes
						<br><input  type = "radio" name = "16-15" class="" value="0" required>No

					</div>
          <br>
          <div class="">
                    	<label>Do you produce regular cash flow forecasts?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-16"class="" value="1" required>Yes
						<br><input  type = "radio" name = "16-16" class="" value="0" required>No

					</div>
<br>
          <div class="">
                    	<label>If so, how accurate have they proven to be to date?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-17"class="" value="3" required>Very accurate (within 10%)
						<br><input  type = "radio" name = "16-17" class="" value="2" required>Fairly accurate (within 20%)
            <br><input  type = "radio" name = "16-17" class="" value="1" required>Inaccurate (more than 20% out)
            <br><input  type = "radio" name = "16-17" class="" value="0" required>Don't know
            <br><input  type = "radio" name = "16-17" class="" value="0" required>Not applicable

					</div>
<br>
          <div class="">
                    	<label>Do you compare your actual performance against your forecasts?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-18"class="" value="2" required>Yes
						<br><input  type = "radio" name = "16-18" class="" value="0" required>No
            <br><input  type = "radio" name = "16-18" class="" value="1" required>Sometimes
            <br><input  type = "radio" name = "16-18" class="" value="0" required>Not applicable

					</div>
<br>
          <div class="">
                    	<label>Are all your taxes filed up to date?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "16-19"class="" value="1" required>Yes
						<br><input  type = "radio" name = "16-19" class="" value="0" required>No

					</div>
          
                      <br>

                      
                    <a href="section17pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                 
               
                
                
              </div>
              <div style="text-align: center;">
              <p><em>That's all for section 16. Did you know that your company financials allow you to see both the health of your business at a glance? keeping them up to date and tracking them closely are important to your success.</em></p>
              <p><span style="color: #ff6600;"><em><strong>End of Section 16 - Financial Management</strong></em></span></p>
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
