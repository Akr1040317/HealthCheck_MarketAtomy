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
  <title>Section 8</title>
  
 
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
            <h3 style="color: #FF5733; padding-top: 1rem;" class=" text-center login-title ">Section 8 - Products or Services</h3>
                    <p><span style="font-size: 12pt;"><em><strong><span style="font-family: arial, helvetica, sans-serif;">This section will help us to evaluate the viability of your products and/or services as these relate to market demand.</span></strong></em></span></p>
             </div>
             <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store8.php" method="post" class="form-section">
                      
                    

                   

                    <div class="">
						<label>What do you sell?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "sell"class="" value="1" required>A single product
                        <br><input  type = "radio" name = "sell" class="" value="2" required>Multiple products
                        <br><input  type = "radio" name = "sell" class="" value="1" required>A single service
                        <br><input  type = "radio" name = "sell" class="" value="2" required>Multiple services
                        <br><input  type = "radio" name = "sell" class="" value="3" required>Both products and services
					</div>
<br>
                    <div class="">
						<label>How do you characterize your business?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "character"class="" value="2" required>High volume, low margin
                        <br><input  type = "radio" name = "character" class="" value="3" required>High margin, low volume
                        <br><input  type = "radio" name = "character" class="" value="4" required>High volume, high margin
                        <br><input  type = "radio" name = "character" class="" value="1" required>Low volume, low margin
                    </div>
<br>
                    <div class="">
						<label>If you are a service oriented business, are you the provider/creator of your service?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "provOCrea"class="" value="3" required>We do it all
                        <br><input  type = "radio" name = "provOCrea" class="" value="1" required>We outsource all creative
                        <br><input  type = "radio" name = "provOCrea" class="" value="1" required>We subcontract all providers
                        <br><input  type = "radio" name = "provOCrea" class="" value="2" required>We are a mix of in-house / outsourced
                        <br><input  type = "radio" name = "provOCrea" class="" value="0" required>Not applicable
                    </div>
<br>
                    <div class="">
						<label>If you are a product oriented business, are you the manufacturer of your product?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "manufact"class="" value="4" required>We manufacture all in US
                        <br><input  type = "radio" name = "manufact" class="" value="1" required>we manufacture all off-shore
                        <br><input  type = "radio" name = "manufact" class="" value="2" required>We out-source to other suppliers
                        <br><input  type = "radio" name = "manufact" class="" value="3" required>We are a mix of in-house/outsourced
                        <br><input  type = "radio" name = "manufact" class="" value="0" required>Not applicable
                    </div>
<br>
                    <div class="">
						<label>Do you have an existing minimal viable product(MVP) for your business?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "mvp"class="" value="3" required>Yes
                        <br><input  type = "radio" name = "mvp" class="" value="2" required>No
                        <br><input  type = "radio" name = "mvp" class="" value="1" required>In process
                        <br><input  type = "radio" name = "mvp" class="" value="0" required>Not applicable
                    </div>
                    <br>
                    <div class="">
						<label>What is your expectation of Net Profit before taxes</label>
					</div>
					<div align="left">
						<input type = "radio" name = "netProfit"class="" value="0" required>0-5%
                        <br><input  type = "radio" name = "netProfit" class="" value="1" required>5%-10%
                        <br><input  type = "radio" name = "netProfit" class="" value="1" required>10%-15%
                        <br><input  type = "radio" name = "netProfit" class="" value="2" required>15%-20%
                        <br><input  type = "radio" name = "netProfit" class="" value="3" required>20%-25%
                        <br><input  type = "radio" name = "netProfit" class="" value="4" required>>25%
                    </div>
<br>
                    <div class="">
						<label>Would your products/services be considered "must haves" or "like to haves"?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "likeTo"class="" value="3" required>Must have
                        <br><input  type = "radio" name = "likeTo" class="" value="1" required>Like to have
                        <br><input  type = "radio" name = "likeTo" class="" value="2" required>Both
                        <br><input  type = "radio" name = "likeTo" class="" value="0" required>Don't know
                    </div>
<br>
                    <div class="">
						<label>Do you have to drive demand or does the market take care of it?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "drive"class="" value="1" required>We drive demand
                        <br><input  type = "radio" name = "drive" class="" value="3" required>Market drives demand
                        <br><input  type = "radio" name = "drive" class="" value="2" required>Both
                        <br><input  type = "radio" name = "drive" class="" value="0" required>Don't know
                    </div>

                    <br>

                    
                      <a href="section9pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                  
               
                
                
              </div>
              <div style="text-align: center;">
              <p><em>You're already through section 8... it's confirmed, you're on a roll! Did you know that when you clearly understand where your product or service fits in the marketplace, you also clearly understand your competition? This helps you to define your competitive edge.</em></p>
              <p><span style="color: #ff6600;"><em><strong>End of Section 8 - Products or Services</strong></em></span></p>
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
