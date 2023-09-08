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
  <title>Section 18 - Cost Analysis</title>
  
 
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
                        <h1 class=" text-center login-title text-dark" style="font-size: 40px;">Section 18 - Cost Anslysis<h1>
                        <p class=" text-center p-1 m-0 font-ubuntu text-black-50">This section will help us to understand how you manage and control the company's costs and expenses.</p>
                      </div>
                      
                <div style="padding: 75px 20% 75px 20%;">

                
                  <form action="store18.php" method="post" class="form-section">

				  	<div class="">
                    	<label>Do you consider you have a cost problem generally?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "18-1"class="" value="1" required>Yes
						<br><input  type = "radio" name = "18-1" class="" value="0" required>No
            <br><input  type = "radio" name = "18-1" class="" value="0" required>Don't Know
						
					</div>
<br>
					<div class="">
                    	<label>If so, do you know where the problem lies?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "18-2"class="" value="1" required>Yes
						<br><input  type = "radio" name = "18-2" class="" value="0" required>No
            <br><input  type = "radio" name = "18-2" class="" value="0" required>Don't Know
						
					</div>
<br>
					<div class="">
                    	<label>Have you tried or been able to do anything positive to turn these problems around?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "18-3"class="" value="1" required>Yes
						<br><input  type = "radio" name = "18-3" class="" value="0" required>No
            <br><input  type = "radio" name = "18-3" class="" value="0" required>Not applicable
						
					</div>
<br>
					<div class="">
                    	<label>Do you have any systems in place to control costs?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "18-4"class="" value="1" required>Yes
						<br><input  type = "radio" name = "18-4" class="" value="0" required>No
						<br><input  type = "radio" name = "18-4" class="" value="0" required>Not applicable
					</div>
<br>
					<div class="">
                    	<label>Is there a cost control culture within your company?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "18-5"class="" value="1" required>Yes
						<br><input  type = "radio" name = "18-5" class="" value="0" required>No
						<br><input  type = "radio" name = "18-5" class="" value="0" required>Don't Know
					</div>
                      
                      <br>
                    <a href="section18pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                
                
                
              </div>
              <div style="text-align: center;">
              <p><em>That's all for Section 18!</em></p>
              <p><em>You're almost done with the most important steps you'll take in your business.</em></p>
              <p><span style="color: #ff6600;"><em><strong>End of Section 18 - Cost Analysis</strong></em></span></p>
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
