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
  <title>Section 4 - Business Funding Position</title>
  
 
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
                        <h1 class=" text-center login-title text-dark" style="font-size: 40px;">Section 4 - Business Funding Position<h1>
                        <p class=" text-center p-1 m-0 font-ubuntu text-black-50">This section helps us to gain a basic understanding of the financial position of your business.</p>
                      </div>
				<div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store4.php" method="post" class="form-section">
                      
                    <div class="">
						<label>Looking generally at your business, how would you describe its financial position?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "finPos"class="" value="5" required>Well-funded and in good shape
						<br><input  type = "radio" name = "finPos" class="" value="4" required>Funding OK but could be better
						<br><input  type = "radio" name = "finPos" class="" value="3" required>The financial situation is quite tight
						<br><input  type = "radio" name = "finPos" class="" value="2" required>The financial position is quite difficult
                        <br><input  type = "radio" name = "finPos" class="" value="1" required>We are in danger of running out of money and having to close the company
                    </div>
                    
                    <div class="">
						<label>How has the business been financed to date? (select all that apply)</label>
					</div>
                    <input type="checkbox" name="financed[]" value="2" >Personal financial resources 
					<br><input type="checkbox" name="financed[]" value="3" >Investor funding 
					<br><input type="checkbox" name="financed[]" value="1" >Crowd funding
					<br><input type="checkbox" name="financed[]" value="3" >Revenues generated from sales 
					<br><input type="checkbox" name="financed[]" value="2" >Friends and Family resources
                    
                    
                    <div class="">
						<label>How much money have you and other founders invested in the business to date?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "investPer"class="" value="1" required>Up to $25,000
						<br><input  type = "radio" name = "investPer" class="" value="2" required>$26,000 to $50,000
						<br><input  type = "radio" name = "investPer" class="" value="3" required>$51,000 to $100,000
						<br><input  type = "radio" name = "investPer" class="" value="4" required>$101,000 to $250,000
                        <br><input  type = "radio" name = "investPer" class="" value="5" required>$250,000 +
                    </div>

                    <div class="">
						<label>Are you looking to attract additional investment funds?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "addInvF"class="" value="2" required>Yes
						<br><input  type = "radio" name = "addInvF" class="" value="1" required>No
						<br><input  type = "radio" name = "addInvF" class="" value="0" required>Not Sure
                    </div>
                    
                    <div class="">
						<label>If so, how much are you looking to raise?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "raise"class="" value="1" required>Up to $50,000
						<br><input  type = "radio" name = "raise" class="" value="1" required>$51,000 to $100,000
						<br><input  type = "radio" name = "raise" class="" value="1" required>$101,000 to $500,000
						<br><input  type = "radio" name = "raise" class="" value="1" required>$500,001 to $1,000,000
                        <br><input  type = "radio" name = "raise" class="" value="1" required>$1,000,000 +
                        <br><input  type = "radio" name = "raise" class="" value="0" required>Not looking to raise capital
                    </div>

                    <div class="">
						<label>What do you need the money for? (select all that apply)?</label>
					</div>
                    <input type="checkbox" name="needfor[]" value="3" >Sales/Marketing 
					<br><input type="checkbox" name="needfor[]" value="2" >Building inventory 
					<br><input type="checkbox" name="needfor[]" value="2" >Building a technology platform
					<br><input type="checkbox" name="needfor[]" value="2" >Manufacturing 
					<br><input type="checkbox" name="needfor[]" value="1" >Patent Application
					<br><input type="checkbox" name="needfor[]" value="2" >Adding executive staff 
                    <br><input type="checkbox" name="needfor[]" value="1" >Adding operations staff 
                    <br><input type="checkbox" name="needfor[]" value="2" >Acquiring equipment 
                    <br><input type="checkbox" name="needfor[]" value="1" >Product/service research and development 
                    <br><input type="checkbox" name="needfor[]" value="1" >General expansion 
					<br><input type="checkbox" name="needfor[]" value="0" >Not applicable 
					<br><input type="checkbox" name="needfor[]" value="1" >Other 
                    
                    
                    <div class="">
						<label>How much do you presently have in immediately available funds, either already in the business or to inject into the business?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "immedFunds"class="" value="0" required>No money left
						<br><input  type = "radio" name = "immedFunds" class="" value="1" required>Up to $10,000
						<br><input  type = "radio" name = "immedFunds" class="" value="2" required>Up to $25,000
						<br><input  type = "radio" name = "immedFunds" class="" value="3" required>Up to $100,000
                        <br><input  type = "radio" name = "immedFunds" class="" value="4" required>More than $100,000
                        <br><input  type = "radio" name = "immedFunds" class="" value="0" required>Not sure
                    </div>
                      <br>
                      <a href="section5pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                  
                
                
              </div>
              <div style="text-align: center;">
              <p><em>Section 4 is all done! Did you know that by completing section 4, you put yourself in a much better position to discuss your needs with investors and financial institutions? Knowing your numbers, and your needs, can be the difference between success and failure!</em></p>
              <span style="color: #ff6600;"><em><strong>End of Section 4 - Business Funding Position</strong></em></span></p>
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
