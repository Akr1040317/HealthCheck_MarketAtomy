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
  <title>Section 21 - General</title>
  
 
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
                        <h1 class=" text-center login-title text-dark" style="font-size: 40px;">Section 21 - General<h1>
                        <p class=" text-center p-1 m-0 font-ubuntu text-black-50">These questions are designed to give us some insight into how you view your company and its future.</p>
                      </div>
                <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store21.php" method="post" class="form-section">

				  	

                    <div class="">
						<label>Do you see any of the following looming external threats happening that could upset your business? (Check all that apply)</label>
					</div>
                    <input type="checkbox" name="21-1[]" value="-1" >Regulatory Changes 
					<br><input type="checkbox" name="21-1[]" value="-1" >Changes in Federal/State Law 
					<br><input type="checkbox" name="21-1[]" value="-1" >New Technological Advances
					<br><input type="checkbox" name="21-1[]" value="-1" >Market Shifts 
                    <br><input type="checkbox" name="21-1[]" value="-1" >Increased Competition
                    <br><input type="checkbox" name="21-1[]" value="0" >Don't know

                    <br><br>

                    <div class="">
						<label>Are there any internal weaknesses or threats that could hinder your growth as a company? (Check all that apply)</label>
					</div>
                    <input type="checkbox" name="21-2[]" value="-1" >Financial 
					<br><input type="checkbox" name="21-2[]" value="-1" >Product/Service robustness 
					<br><input type="checkbox" name="21-2[]" value="-1" >Management team/staffing
					<br><input type="checkbox" name="21-2[]" value="-1" >Quality control 
                    <br><input type="checkbox" name="21-2[]" value="-1" >Weak systems and processes
                    <br><input type="checkbox" name="21-2[]" value="0" >Don't know

                    <br><br>

                    <div class="">
                    	<label>Do you see any changes externally that could create great opportunities for growth?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "21-3"class="" value="1" required>Yes
						<br><input  type = "radio" name = "21-3" class="" value="0" required>No
						
					</div>
<br>
                    <div class="">
                    	<label>Do you feel you already have the internal resources to exploit those opportunities?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "21-4"class="" value="1" required>Yes
						<br><input  type = "radio" name = "21-4" class="" value="0" required>No
                        <br><input  type = "radio" name = "21-4" class="" value="0" required>Don't know
						
					</div>
<br>
                    <div class="">
                    	<label>How close is the company to reaching it's full potential as it is right now?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "21-5"class="" value="0" required>Early Stage
						<br><input  type = "radio" name = "21-5" class="" value="5" required>Half way there
                        <br><input  type = "radio" name = "21-5" class="" value="10" required>Next stage within 1 year
						
					</div>
                    <br>
                    <div class="">
                    	<label>Would it require a significant capital injection to take it to another level?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "21-6"class="" value="-1" required>Yes
						<br><input  type = "radio" name = "21-6" class="" value="1" required>No
                        <br><input  type = "radio" name = "21-6" class="" value="0" required>Don't know
						
					</div>
<br>
                    <div class="">
                    	<label>Would it require an enhanced team to take it there?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "21-7"class="" value="1" required>Yes
						<br><input  type = "radio" name = "21-7" class="" value="0" required>No
                        <br><input  type = "radio" name = "21-7" class="" value="0" required>Don't know
						
					</div>
                    

                      <br>
                    <a href="https://www.marketatomy.com/"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                  
               <br>
                  <p style="text-align: center;"><span style="color: #0000ff;"><strong><em>That's it! Congratulations! You are done!</em></strong></span></p>
                
                  <p style="text-align: center;"><span style="color: #ff6600;"><em><strong>End of Section 3 - Ownership Structure</strong></em></span></p>
              
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
