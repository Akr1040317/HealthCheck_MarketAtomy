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
  <title>Section 3 - Ownership Structure</title>
  
 
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
                        <h1 class=" text-center login-title text-dark" style="font-size: 40px;">Section 3 - Ownership Structure<h1>
                        <p class=" text-center p-1 m-0 font-ubuntu text-black-50">Please answer the following questions to give us a better understanding of the ownership structure of your business.</p>
                      </div>
              <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store3.php" method="post" class="form-section">

				  	<div class="">
                    	<label>Are you the sole owner of your business?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "soleOwn"class="" value="2" required>Yes
						<br><input  type = "radio" name = "soleOwn" class="" value="1" required>No
						
					</div>

					<div class="">
                    	<label>Is there someone else you need to get approval from to make business decisions?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "sepApprov"class="" value="1" required>Yes
						<br><input  type = "radio" name = "sepApprov" class="" value="2" required>No
						
					</div>

					<div class="">
                    	<label>Are you or any other owners of your company women, minorities, veterans or a disabled veteran?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "minority"class="" value="2" required>Yes
						<br><input  type = "radio" name = "minority" class="" value="1" required>No
						
					</div>

					<div class="">
                    	<label>Is there stock set aside for future investors and/or employees?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "stock"class="" value="2" required>Yes
						<br><input  type = "radio" name = "stock" class="" value="1" required>No
						<br><input  type = "radio" name = "stock" class="" value="0" required>Don't Know
						<br><input  type = "radio" name = "stock" class="" value="0" required>Not applicable
					</div>

					<div class="">
                    	<label>Have you established any strategic alliances or partners?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "allianPart"class="" value="3" required>Yes
						<br><input  type = "radio" name = "allianPart" class="" value="2" required>No
						<br><input  type = "radio" name = "allianPart" class="" value="1" required>In Process
					</div>
                      
                  <br>
                      
                    <a href="section4pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                  <br>
               
                
                
              </div>
              <div style="text-align: center;">
              <p><em>Section 3 is DONE, You're on a roll! Did you know that Amazon, Google, and Facebook all experienced rapid growth with strategic alliances, partnerships, and setting aside equity for employees?</em></p>
              <p><span style="color: #ff6600;"><em><strong>End of Section 3 - Ownership Structure</strong></em></span></p>
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
