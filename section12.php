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
  <title>Section 12 - Sales</title>
  
 
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
            <h3 style="color: #FF5733; padding-top: 1rem;" class=" text-center login-title ">Section 12 - Sales</h3>
            <p><span style="font-family:arial, helvetica, sans-serif;font-size:12pt;"><em><strong>This section will help us to understand what processes you have in place to fill your sales funnel and to attract new customers.</strong></em></span></p></div>
            <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store12.php" method="post" class="form-section">
                      
                    <div class="">
                      <label>Where are your sales made?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "sales"class="" value="1" required>Business to Business (B2)
                      <br><input  type = "radio" name = "sales" class="" value="1" required>Business to Consumer (B2C)
                      <br><input  type = "radio" name = "sales" class="" value="2" required>Both
                    </div>
<br>
                    <div class="">
                      <label>Have you developed revenue projections for the next 2-3 years?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "projection"class="" value="2" required>Yes
                      <br><input  type = "radio" name = "projection" class="" value="1" required>No
                    </div>
<br>
                    <div class="">
                      <label>Have you developed revenue projections for the next 3-5 years?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "revenue"class="" value="2" required>Yes
                      <br><input  type = "radio" name = "revenue" class="" value="1" required>No
                    </div>
<br>
                    <div class="">
                      <label>How frequently do you track your performance against these projections?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "track"class="" value="0" required>Never
                      <br><input  type = "radio" name = "track" class="" value="4" required>Weekly
                      <br><input  type = "radio" name = "track" class="" value="3" required>Monthly
                      <br><input  type = "radio" name = "track" class="" value="2" required>Quarterly
                      <br><input  type = "radio" name = "track" class="" value="1" required>Annually
                      <br><input  type = "radio" name = "track" class="" value="1" required>As and when we can get to it
                    </div>
<br>
                    <div class="">
                      <label>Do you have an internal sales force?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "internal"class="" value="2" required>Yes
                      <br><input  type = "radio" name = "internal" class="" value="1" required>No
                    </div>
<br>
                    <div class="">
                      <label>How many people in the company are responsible for making sales?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "responsible"class="" value="0" required>Just me
                      <br><input  type = "radio" name = "responsible" class="" value="1" required>2-5
                      <br><input  type = "radio" name = "responsible" class="" value="2" required>5+
                    </div>
<br>
                    <div class="">
                      <label>Are your salespeople full-time or part-time?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "salespeople"class="" value="2" required>Full-time
                      <br><input  type = "radio" name = "salespeople" class="" value="1" required>Part-time
                      <br><input  type = "radio" name = "salespeople" class="" value="2" required>Some of each
                      <br><input  type = "radio" name = "salespeople" class="" value="0" required>N/A
                    </div>
<br>
                    <div class="">
                      <label>Do you have an established sales process in place?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "established"class="" value="2" required>Yes
                      <br><input  type = "radio" name = "established" class="" value="1" required>No
                      <br><input  type = "radio" name = "established" class="" value="0" required>Don't know
                    </div>
<br>
                    <div class="">
                      <label>How are your sales personel compensated? (Check all that apply)</label>
                    </div>
                    <input type="checkbox" name="compensated[]" value="1" >Commission only 
                    <br><input type="checkbox" name="compensated[]" value="1" >Salary only 
                    <br><input type="checkbox" name="compensated[]" value="1" >Salary plus commission
                    <br><input type="checkbox" name="compensated[]" value="1" >Periodic bonuses 
                    <br><input type="checkbox" name = "compensated[]" value="0">Other
                    <br>

                    <div class="">
                      <label>Is your sales team meeting defined goals?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "goals"class="" value="2" required>Yes
                      <br><input  type = "radio" name = "goals" class="" value="1" required>No
                      <br><input  type = "radio" name = "goals" class="" value="0" required>N/A
                    </div>
<br>
                    <div class="">
                      <label>Do you have an in-house sales training program?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "training"class="" value="2" required>Yes
                      <br><input  type = "radio" name = "training" class="" value="1" required>No
                      <br><input  type = "radio" name = "training" class="" value="0" required>Not Applicable
                    </div>
<br>
                    <div class="">
                      <label>Do your field sales people also manage ongoing customer relationships?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "relationship"class="" value="2" required>Yes
                      <br><input  type = "radio" name = "relationship" class="" value="1" required>No
                      <br><input  type = "radio" name = "relationship" class="" value="0" required>N/A
                    </div>
<br>
                    <div class="">
                      <label>How long is the sales cycle?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "cycle"class="" value="3" >Less than 30 days
                      <br><input  type = "radio" name = "cycle" class="" value="2" >Between 31-90 days
                      <br><input  type = "radio" name = "cycle" class="" value="1" >More than 90 days
                      <br><input  type = "radio" name = "cycle" class="" value="0">Other
                    </div>
<br>
                    <div class="">
                      <label>Do you export/work internationally?</label>
                    </div>
                    <div align="left">
                      <input type = "radio" name = "export"class="" value="2" required>Yes
                      <br><input  type = "radio" name = "export" class="" value="1" required>No
                    </div>
                      <br>
                      <a href="section13pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
               
                
                
              </div>
              <div style="text-align: center;">
                <p><em>That's it for section 12. Just a reminder... you're awesome. And, you're building the most solid future for your business!/em></p>
                <p><span style="color: #ff6600;"><em><strong>End of Section 12 - Sales</strong></em></span></p>
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
