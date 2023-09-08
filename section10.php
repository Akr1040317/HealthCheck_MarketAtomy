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
  <title>Section 10 - Scalability</title>
  
 
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
            <h3 style="color: #FF5733; padding-top: 1rem;" class=" text-center login-title ">Section 10 - Scalability</h3>
                    <p><span style="font-size: 12pt;"><em><strong><span style="font-family: arial, helvetica, sans-serif;">This section will help us to identify the ability for your business to grow.</span></strong></em></span></p>
             </div>
             <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store10.php" method="post" class="form-section">
                      
                    

                   

                    <div class="">
						<label>Where are your products/services being sold?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "sold"class="" value="0" required>Not yet making sales
                        <br><input  type = "radio" name = "sold" class="" value="1" required>Locally
                        <br><input  type = "radio" name = "sold" class="" value="2" required>Regionally
                        <br><input  type = "radio" name = "sold" class="" value="3" required>Nationally
                        <br><input  type = "radio" name = "sold" class="" value="4" required>Internationally
                    </div>
                    <br>
                    <div class="">
						<label>Is your business model one which will enable you to significantly scale up your business?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "scale"class="" value="2" required>Yes
                        <br><input  type = "radio" name = "scale" class="" value="1" required>No
                        <br><input  type = "radio" name = "scale" class="" value="0" required>Not sure
                    </div>
<br>
                    <div class="">
						<label>How do you see the future of your business?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "future"class="" value="0" required>Local Mom & Pop
                        <br><input  type = "radio" name = "future" class="" value="1" required>Regional
                        <br><input  type = "radio" name = "future" class="" value="2" required>National
                        <br><input  type = "radio" name = "future" class="" value="3" required>International
                    </div>
<br>
                    <div class="">
						<label>How long before you see yourself becoming profitable?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "profitable"class="" value="4" required>I am profitable now!
                        <br><input  type = "radio" name = "profitable" class="" value="3" required>Within 6 months
                        <br><input  type = "radio" name = "profitable" class="" value="2" required>Within 1 year
                        <br><input  type = "radio" name = "profitable" class="" value="1" required>Within 2 years
                        <br><input  type = "radio" name = "profitable" class="" value="0" required>After 2 years
                    </div>
<br>
                    <div class="">
						<label>Are you exploiting the company's full potential for "Geographical" scalability?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "geo"class="" value="1" required>Yes
                        <br><input  type = "radio" name = "geo" class="" value="0" required>No
                        <br><input  type = "radio" name = "geo" class="" value="0" required>Don't know
                    </div>
<br>
                    <div class="">
						<label>Would you consider setting up a physical presence in overseas markets?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "physical"class="" value="2" required>Yes
                        <br><input  type = "radio" name = "physical" class="" value="1" required>No
                        <br><input  type = "radio" name = "physical" class="" value="0" required>Don't know
                    </div>
<br>
                    <div class="">
						<label>Are you exploiting the company's full potential for "Market" scalability?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "market"class="" value="2" required>Yes
                        <br><input  type = "radio" name = "market" class="" value="1" required>No
                        <br><input  type = "radio" name = "market" class="" value="0" required>Don't know
                    </div>
<br>
                    <div class="">
						<label>Are you exploiting the company's full potential for "Product" scalability?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "product"class="" value="2" required>Yes
                        <br><input  type = "radio" name = "product" class="" value="1" required>No
                        <br><input  type = "radio" name = "product" class="" value="0" required>Don't know
                    </div>

                        <br>
                      <a href="section11pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                  
               
                
                
              </div>
              <div style="text-align: center;">
              <p><em>You've done it again... that's a wrap for section 10! Great work. Did you know that by answering the questions in section 10, you increase your chances of opening up new markets for your product/service by over 70 percent?</em></p>
              <p><span style="color: #ff6600;"><em><strong>End of Section 10 - Scalability</strong></em></span></p>
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
