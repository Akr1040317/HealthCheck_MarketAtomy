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
  <title>Section 15 - Marketing</title>
  
 
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
                        <h1 class=" text-center login-title text-dark" style="font-size: 40px;">Section 15 - Marketing<h1>
                        <p class=" text-center p-1 m-0 font-ubuntu text-black-50">This section will give us a better understanding of what you have done to date to create awareness of, and brand your company and its products/services in your markets</p>
                      </div>
	
				<div style="padding: 75px 20% 75px 20%;">
                  <form action="store15.php" method="post" class="form-section">

				  	<div class="">
                    	<label>Does your company have a dominant brand identity?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-1"class="" value="1" required>Yes
						<br><input  type = "radio" name = "15-1" class="" value="0" required>No
						<br><input  type = "radio" name = "15-1" class="" value="0" required>Don't know
					
					</div>
<br>
					<div class="">
                    	<label>Does your company have registered domain names to support its market presence?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-2"class="" value="1" required>Yes
						<br><input  type = "radio" name = "15-2" class="" value="0" required>No
						<br><input  type = "radio" name = "15-2" class="" value="0" required>Don't know
					
					</div>
<br>
					<div class="">
                    	<label>Does your company have a professionally designed brand logo?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-3"class="" value="1" required>Yes
						<br><input  type = "radio" name = "15-3" class="" value="0" required>No
						<br><input  type = "radio" name = "15-3" class="" value="0" required>Not sure
					
					</div>
<br>
					<div class="">
                    	<label>Do your products/services have clear brand identities?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-4"class="" value="1" required>Yes
						<br><input  type = "radio" name = "15-4" class="" value="0" required>No
						<br><input  type = "radio" name = "15-4" class="" value="0" required>Not sure
					
					</div>
<br>
					<div class="">
                    	<label>How do you perceive your company's image today?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-5"class="" value="0" required>Poor
						<br><input  type = "radio" name = "15-5" class="" value="1" required>Less than average
						<br><input  type = "radio" name = "15-5" class="" value="2" required>Average
						<br><input  type = "radio" name = "15-5" class="" value="3" required>Better than average
						<br><input  type = "radio" name = "15-5" class="" value="4" required>Great
					
					</div>
<br>
					<div class="">
                    	<label>If rated low, do you know why?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-6"class="" value="1" required>Yes
						<br><input  type = "radio" name = "15-6" class="" value="0" required>No
						<br><input  type = "radio" name = "15-6" class="" value="0" required>Don't know
						<br><input  type = "radio" name = "15-6" class="" value="0" required>Not Applicable
					</div>
<br>
					<div class="">
                    	<label>Have you made efforts to strengthen your image in the past 12 months?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-7"class="" value="1" required>Yes
						<br><input  type = "radio" name = "15-7" class="" value="0" required>No
						<br><input  type = "radio" name = "15-7" class="" value="0" required>Don't know
					</div>
<br>
					<div class="">
                    	<label>Do you have a marketing strategy incorporated into a Marketing Plan?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-8"class="" value="1" required>Yes
						<br><input  type = "radio" name = "15-8" class="" value="0" required>No
						
					</div>
<br>
					<div class="">
                    	<label>How often is this marketing strategy revisited & updated?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-9"class="" value="3" required>Monthly
						<br><input  type = "radio" name = "15-9" class="" value="2" required>Quarterly
						<br><input  type = "radio" name = "15-9" class="" value="1" required>Annually
						<br><input  type = "radio" name = "15-9" class="" value="0" required>Never
						<br><input  type = "radio" name = "15-9" class="" value="0" required>Not Applicable

					</div>
<br>
					<div class="">
                    	<label>Do you have an identified marketing budget?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-10"class="" value="1" required>Yes
						<br><input  type = "radio" name = "15-10" class="" value="0" required>No
						
					</div>
<br>
					<div class="">
                    	<label>What percentage of total gross revenue is attributed to marketing?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-11"class="" value="0" required>0%
						<br><input  type = "radio" name = "15-11" class="" value="1" required>Less than 10%
						<br><input  type = "radio" name = "15-11" class="" value="2" required>Between 10% & 20%
						<br><input  type = "radio" name = "15-11" class="" value="4" required>Between 20% & 30%
						<br><input  type = "radio" name = "15-11" class="" value="3" required>over 30%

					</div>
<br>
					<div class="">
                    	<label>Do you have anyone specifically in charge of marketing in-house or outside?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-12"class="" value="1" required>Yes
						<br><input  type = "radio" name = "15-12" class="" value="0" required>No
						
					</div>
<br>
					<div class="">
                    	<label>Is there a corporate focus on the marketing of the company?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-13"class="" value="1" required>Yes
						<br><input  type = "radio" name = "15-13" class="" value="0" required>No
						
					</div>
<br>
                    <div class="">
						<label>What are the different channels you use to promote the business currently? (Check all that apply)</label>
					</div>
                    <input type="checkbox" name="15-14[]" value="1" >Social Platforms and Website 
					<br><input type="checkbox" name="15-14[]" value="1" >Networking 
					<br><input type="checkbox" name="15-14[]" value="1" >Word of Mouth - Referrals
					<br><input type="checkbox" name="15-14[]" value="1" >Outbound marketing venues (i.e. print, display, radio, television) 
                    <br><input type="checkbox" name="15-14[]" value="1" >Inbound marketing venues (i.e. blogging, podcasting, electronic newsletters, webinars)
					<br><input type="checkbox" name="15-14[]" value="1" >Touch-based Marketing (presentations, live-training events, tradeshows, live demonstrations)
					<br><input type="checkbox" name="15-14[]" value="0" >No marketing efforts currently 
                    <br><input type="checkbox" name="15-14[]" value="1" >Other
                    
                    <br>

					<div class="">
                    	<label>Are you active on social media?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-15"class="" value="1" required>Yes
						<br><input  type = "radio" name = "15-15" class="" value="0" required>No
						
					</div>
<br>
					<div class="">
                    	<label>Do you have an in-house expert on social media or is it outsourced?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-16"class="" value="2" required>In-house
						<br><input  type = "radio" name = "15-16" class="" value="0" required>Out-sourced
						<br><input  type = "radio" name = "15-16" class="" value="1" required>Mix
						<br><input  type = "radio" name = "15-16" class="" value="0" required>N/A

					</div>
<br>
					<div class="">
                    	<label>Are your customers on social media?</label>
                    </div>
                    <div align="left" >
                    	<input type = "radio" name = "15-17"class="" value="2" required>Yes
						<br><input  type = "radio" name = "15-17" class="" value="0" required>No
						<br><input  type = "radio" name = "15-17" class="" value="0" required>Don't know
						<br><input  type = "radio" name = "15-17" class="" value="1" required>Some

					</div>
                    
                    
					<br>
                    <a href="section16pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                  
               
                
                
              </div>
              <div style="text-align: center;">
              <p><em>Section 15 is a wrap. You're really on a roll now! Did you know that HOW you communicate with potential customers is as important as reaching them? Speaking the right language is critical.</em></p>
              <p><span style="color: #ff6600;"><em><strong>End of Section 15 - Marketing</strong></em></span></p>
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
