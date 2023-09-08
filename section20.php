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
  <title>Section 20 - Personal Assessment</title>
  
 
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
                        <h1 class=" text-center login-title text-dark" style="font-size: 40px;">Section 20 - Personal Assessment<h1>
                        <p class=" text-center p-1 m-0 font-ubuntu text-black-50">This section will help us determine how you cope with the many stresses of being a leader within your company.</p>
                      </div>
                    <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store20.php" method="post" class="form-section">

				  	<div class="">
                    	<label>Are you permanently stressed out due to work issues?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "20-1"class="" value="-1" required>Yes
						<br><input  type = "radio" name = "20-1" class="" value="1" required>No
						
					</div>
<br>
                    <div class="">
						<label>What stressors seem to keep you up at night? (Check all that apply)</label>
					</div>
                    <input type="checkbox" name="20-2[]" value="-1" >Bill payment issues 
					<br><input type="checkbox" name="20-2[]" value="-1" >Family issues 
					<br><input type="checkbox" name="20-2[]" value="-1" >Staffing/Payroll issues
					<br><input type="checkbox" name="20-2[]" value="-1" >Choronic Health Issue 
                    <br><input type="checkbox" name="20-2[]" value="1" >Sleeping like a baby
                    
                    <br><br>
                    
                    <div class="">
                    	<label>Do you feel your life/work balance is skewed in the wrong direction?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "20-3"class="" value="-1" required>Yes
						<br><input  type = "radio" name = "20-3" class="" value="1" required>No
						
					</div>
<br>
                    <div class="">
                    	<label>Are you ever able to take time out to recharge?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "20-4"class="" value="1" required>Yes
						<br><input  type = "radio" name = "20-4" class="" value="0" required>No
						
					</div>
<br>
                    <div class="">
                    	<label>Do you have a team in place to fill in gaps when you are away?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "20-5"class="" value="1" required>Yes
						<br><input  type = "radio" name = "20-5" class="" value="0" required>No
						
					</div>
<br>
                    <div class="">
                    	<label>Do you feel the company can operate effectively in your absence?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "20-6"class="" value="1" required>Yes
						<br><input  type = "radio" name = "20-6" class="" value="0" required>No
						
					</div>
<br>
                    <div class="">
                    	<label>Do you have "key person" insurance or some protective measure in place if you should become incapacitated?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "20-7"class="" value="1" required>Yes
						<br><input  type = "radio" name = "20-7" class="" value="0" required>No
						
					</div>
<br>
                    <div class="">
                    	<label>Are you able to pay yourself what you think you're worth?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "20-8"class="" value="1" required>Yes
						<br><input  type = "radio" name = "20-8" class="" value="0" required>No
						
					</div>
<br>
                    <div class="">
                    	<label>On an hourly basis, are you the best or worst paid person in your company?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "20-9"class="" value="1" required>Worst
						<br><input  type = "radio" name = "20-9" class="" value="2" required>Middle
                        <br><input  type = "radio" name = "20-9" class="" value="3" required>Best
						
					</div>
<br>
                    <div class="row">
                    	<label>Do you have a "Legacy" plan in place for your business?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "20-10"class="" value="1" required>Yes
						<br><input  type = "radio" name = "20-10" class="" value="0" required>No
                        <br><input  type = "radio" name = "20-10" class="" value="0" required>Don't know
						
					</div>
<br>
                    <div class="row">
                    	<label>Do you have a successor in mind?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "20-11"class="" value="1" required>Yes
						<br><input  type = "radio" name = "20-11" class="" value="0" required>No
						
					</div>
<br>
                    <div class="row">
                    	<label>If so, is your successor being groomed to take over?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "20-12"class="" value="1" required>Yes
						<br><input  type = "radio" name = "20-12" class="" value="0" required>No
						<br><input  type = "radio" name = "20-12" class="" value="0" required>Doesn't apply

					</div>
<br>
                    <div class="">
                    	<label>Looking at your overall feelings about becoming a business owner, which answer best sums up your feelings?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "20-13"class="" value="3" required>Best thing I ever did
						<br><input  type = "radio" name = "20-13" class="" value="2" required>I have good and bad days but I generally feel I made the right decision
						<br><input  type = "radio" name = "20-13" class="" value="1" required>There are times when I seriously wonder if this was the right move
                        <br><input  type = "radio" name = "20-13" class="" value="0" required>I wish I hadn't done it
                        <br><input  type = "radio" name = "20-13" class="" value="1" required>I'm now too deeply locked in, so I have no option but to carry on

                    </div>

                      <br>
                    <a href="section21pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
               
                
                
              </div>
              <div style="text-align: center;">
              <p><em>That's all for section 20. Just one more to go for you to grow!</em></p>
              <p><span style="color: #ff6600;"><em><strong>End of Section 20 - Personal Assessment</strong></em></span></p>
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
