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
  <title>Section 7</title>
  
 
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
            <h3 style="color: #FF5733; padding-top: 1rem;" class=" text-center login-title ">Section 7 - Executive Management Team</h3>
                    <p><span style="font-size: 12pt;"><em><strong><span style="font-family: arial, helvetica, sans-serif;">This section will help us better understand the key corporate functionalities that apply to your business and will help us identify any gaps in management.</span></strong></em></span></p>
             </div>
             <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store7.php" method="post" class="form-section">
                      
                    

                   

                    <div class="">
						<label>Do you have executives other than yourself?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "othExe"class="" value="1" required>Yes
						<br><input  type = "radio" name = "othExe" class="" value="0" required>No
					</div>
<br>
                    <div class="">
						<label>What operations/skill gaps do you currently feel you need to fill in order to grow your business? (Check all that apply)</label>
					</div>
                    <input type="checkbox" name="execFunct[]" value="1" >Executive management team 
					<br><input type="checkbox" name="execFunct[]" value="1" >Chief Executive Officer(CEO) 
					<br><input type="checkbox" name="execFunct[]" value="1" >Chief Operations Officer(COO)
					<br><input type="checkbox" name="execFunct[]" value="1" >Chief Financial Officer(CFO) 
                    <br><input type="checkbox" name="execFunct[]" value="1" >Chief Technology Officer(CTO)
                    <br><input type="checkbox" name="execFunct[]" value="1" >Chief Marketing/Sales Officer CMO/CSO 
					<br><input type="checkbox" name="execFunct[]" value="1" >Chief Science Officer
                    <br><input type="checkbox" name="execFunct[]" value="1" >Chief Strategy Officer
                    <br><input type="checkbox" name="execFunct[]" value="0" >None
                    <br>
<br>
                    <div class="">
						<label>Have any of your Key Executives previously had successful business ventures?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "prevBus"class="" value="0" required>None
                        <br><input  type = "radio" name = "prevBus" class="" value="1" required>Some
                        <br><input  type = "radio" name = "prevBus" class="" value="2" required>All
                    </div>
<br>
                    <div class="">
						<label>Do any of the Key Executives have Founder shares in the business?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "shares"class="" value="0" required>None
                        <br><input  type = "radio" name = "shares" class="" value="1" required>Some
                        <br><input  type = "radio" name = "shares" class="" value="2" required>All
                    </div>
<br>
                    <div class="">
						<label>Have any of the Key Executives invested into the business?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "invested"class="" value="0" required>None
                        <br><input  type = "radio" name = "invested" class="" value="1" required>Some
                        <br><input  type = "radio" name = "invested" class="" value="2" required>All
                    </div>
<br>
                    <div class="">
						<label>Are all executive team members direct employees of the business?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "directEmploy"class="" value="2" required>Yes
                        <br><input  type = "radio" name = "directEmploy" class="" value="1" required>No
                        <br><input  type = "radio" name = "directEmploy" class="" value="1" required>Some are 1099 consultants
                    </div>
                    <br>
                    <div class="">
						<label>Do you have a Board of Directors?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "boDi"class="" value="1" required>Yes
						<br><input  type = "radio" name = "boDi" class="" value="0" required>No
                    </div>
<br>
                    <div class="">
						<label>Do you have an Advisory Board?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "adBo"class="" value="1" required>Yes
						<br><input  type = "radio" name = "adBo" class="" value="0" required>No
                    </div>
<br>
                    <div class="">
						<label>Do you have external professional advisors, consultants or coaches in any specific area of activity?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "external"class="" value="1" required>Yes
						<br><input  type = "radio" name = "external" class="" value="0" required>No
                    </div>
<br>
                    
                    
                    
                      <a href="section8pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
               
               
                
                
              </div>
              <div style="text-align: center;">
              <p><em>Section 7 is complete... you are becoming a master of the business universe!</em></p>
                <p><em>Did you know that boards of directors and boards of advisors are key components in the success of your business? They provide a clear outside perspective, experience and well established relationships that can help you to grow.</em></p> 
                <p><span style="color: #ff6600;"><em><strong>End of Section 7 - Executive Management Team</strong></em></span></p>
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
