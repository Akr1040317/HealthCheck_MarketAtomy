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
  <title>Section 9 - Intellectual Property (IP)</title>
  
 
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
            <h3 style="color: #FF5733; padding-top: 1rem;" class=" text-center login-title ">Section 9 - Intellectual Property (IP)</h3>
                    <p><span style="font-size: 12pt;"><em><strong><span style="font-family: arial, helvetica, sans-serif;">ThiS section will help us determine the ongoing potential for your business, as well as any risks that may need to be addressed</span></strong></em></span></p>
             </div>
             <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store9.php" method="post" class="form-section">
                      
                    

                   

                    <div class="">
						<label>Do you have any proprietary technology or manufacturing processes?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "prop"class="" value="2" required>Yes
                        <br><input  type = "radio" name = "prop" class="" value="0" required>Don't know
                        <br><input  type = "radio" name = "prop" class="" value="0" required>Not Applicable
                    </div>
                    <br>
                    <div class="">
						<label>Do you have any patents, copyrights or trademarks filed or pending?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "patents"class="" value="2" required>Yes
                        <br><input  type = "radio" name = "patents" class="" value="0" required>No
                        <br><input  type = "radio" name = "patents" class="" value="1" required>In Process
                    </div>
<br>
                    <div class="">
						<label>Are you satisfied that your IP is being protected at the manufacturing level?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "ip"class="" value="2" required>Yes
                        <br><input  type = "radio" name = "ip" class="" value="1" required>No
                        <br><input  type = "radio" name = "ip" class="" value="0" required>Not Applicable
                    </div>
<br>
                    <div class="">
						<label>Do you work with an established IP attorney?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "ipAttorney"class="" value="2" required>Yes
                        <br><input  type = "radio" name = "ipAttorney" class="" value="0" required>No
                        <br><input  type = "radio" name = "ipAttorney" class="" value="1" required>Under consideration
                        <br><input  type = "radio" name = "ipAttorney" class="" value="0" required>Not Applicable
                    </div>
<br>
                    <div class="">
						<label>Do you suffer any issues with regard to IP infringement?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "infringement"class="" value="2" required>Yes
                        <br><input  type = "radio" name = "infringement" class="" value="1" required>No
                        <br><input  type = "radio" name = "infringement" class="" value="0" required>Don't know
                    </div>
<br>
                    <div class="">
						<label>Do you suffer problems with counterfeit products competing with you in the market?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "counterfeit"class="" value="-1" required>Yes
                        <br><input  type = "radio" name = "counterfeit" class="" value="1" required>No
                        <br><input  type = "radio" name = "counterfeit" class="" value="0" required>Don't know
                    </div>

                      <br>
                      <a href="section10pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                  
               
                
                
              </div>
              <div style="text-align: center;">
              <p><em>Just like a fine wine... you've finished section 9!</em></p>
                <p><em>You're building the ultimate roadmap to success for you and your business. Ready for more?</em></p>
                <p><span style="color: #ff6600;"><em><strong>End of Section 9 - Intellectual Property</strong></em></span></p>
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
