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
  <title>Section 6</title>
  
 
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
            <h3 style="color: #FF5733; padding-top: 1rem;" class=" text-center login-title ">Section 6 - Business Structure and Organization</h3>
                    <p><span style="font-size: 12pt;"><em><strong><span style="font-family: arial, helvetica, sans-serif;">This section will help us to understand how you run the day-to-day activities of the organization, including identifying gaps that may keep you from achieving your goals.</span></strong></em></span></p>
					
			  </div>
              <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store6.php" method="post" class="form-section">
                      
                    <div class="">
						<label>Is this a home office company or will you need additional office space?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "homeOrAdd"class="" value="1" required>Home office to start
						<br><input  type = "radio" name = "homeOrAdd" class="" value="2" required>Home office long-term
                        <br><input  type = "radio" name = "homeOrAdd" class="" value="3" required>Shared office space
                        <br><input  type = "radio" name = "homeOrAdd" class="" value="4" required>Incubator office space
						<br><input  type = "radio" name = "homeOrAdd" class="" value="4" required>Our own office space
                    </div>
                    <br>
                    <div class="">
						<label>How many people do you employ in total?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "employ"class="" value="1" required>1 - Just myself
						<br><input  type = "radio" name = "employ" class="" value="2" required>2-3
                        <br><input  type = "radio" name = "employ" class="" value="3" required>4-10
                        <br><input  type = "radio" name = "employ" class="" value="3" required>11-20
                        <br><input  type = "radio" name = "employ" class="" value="4" required>21-50
                        <br><input  type = "radio" name = "employ" class="" value="5" required>50+
                    </div>
<br>
                    <div class="">
						<label>How many people will you employ at full growth?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "employFull"class="" value="0" required>1 - Just myself
						<br><input  type = "radio" name = "employFull" class="" value="1" required>2-3
                        <br><input  type = "radio" name = "employFull" class="" value="2" required>4-10
                        <br><input  type = "radio" name = "employFull" class="" value="2" required>11-20
                        <br><input  type = "radio" name = "employFull" class="" value="3" required>21-50
                        <br><input  type = "radio" name = "employFull" class="" value="4" required>50+
                    </div>
<br>
                    <div class="">
						<label>Do you have an HR department internally, or is it outsourced?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "hr"class="" value="1" required>Internal department
						<br><input  type = "radio" name = "hr" class="" value="1" required>Outsourced
						<br><input  type = "radio" name = "hr" class="" value="0" required>No HR department yet
                    </div>
<br>
                    <div class="">
						<label>Do you have an IT department internally, or is it outsourced?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "it"class="" value="1" required>Internal department
						<br><input  type = "radio" name = "it" class="" value="1" required>Outsourced
						<br><input  type = "radio" name = "it" class="" value="0" required>No IT department yet
                    </div>
<br>
                    <div class="">
						<label>Is there a defined culture within your organization?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "defCulture"class="" value="2" required>Yes
						<br><input  type = "radio" name = "defCulture" class="" value="1" required>No
                    </div>
<br>
                    <div class="">
						<label>Do you have a high turnover of employees?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "turnover"class="" value="2" required>Yes
						<br><input  type = "radio" name = "turnover" class="" value="1" required>No
                    </div>
                    <br>
                    <div class="">
						<label>Do you have issues with team engagement among employees?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "teamEng"class="" value="2" required>Yes
						<br><input  type = "radio" name = "teamEng" class="" value="1" required>No
                    </div>
<br>
                    <div class="">
						<label>Have you developed a policies and procedures manual?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "polApro"class="" value="2" required>Yes
						<br><input  type = "radio" name = "polApro" class="" value="1" required>No
                    </div>
<br>
                    <div class="">
						<label>Do you have job descriptions in place for employees?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "jobDesc"class="" value="2" required>Yes
						<br><input  type = "radio" name = "jobDesc" class="" value="1" required>No
                    </div>
<br>
                    <div class="">
						<label>Do you have official review/discipline process in place?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "review"class="" value="2" required>Yes
						<br><input  type = "radio" name = "review" class="" value="1" required>No
                    </div>
<br>
                    <div class="">
						<label>Do you have an active employee benefits plan in place?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "benefits"class="" value="2" required>Yes
						<br><input  type = "radio" name = "benefits" class="" value="1" required>No
                    </div>
<br>
                    <div class="">
						<label>Will you be seeking to hire new employees over next 12 months?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "newEmploy"class="" value="2" required>Yes
                        <br><input  type = "radio" name = "newEmploy" class="" value="1" required>No
                        <br><input  type = "radio" name = "newEmploy" class="" value="0" required>Not sure
                    </div>
<br>
                    <div class="">
						<label>Have you used external consultants to date?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "external"class="" value="2" required>Yes
                        <br><input  type = "radio" name = "external" class="" value="0" required>No
                        <br><input  type = "radio" name = "external" class="" value="1" required>Under consideration
                    </div>
<br>
                    <div class="">
						<label>Would you consider using part-time consultants to fulfill some of the key functions within the company?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "partTime"class="" value="2" required>Yes
                        <br><input  type = "radio" name = "partTime" class="" value="0" required>No
                        <br><input  type = "radio" name = "partTime" class="" value="1" required>Maybe
                    </div>
<br>


                    <div class="">
						<label>What operations/skill gaps do you currently feel you need to fill in order to grow your business? (Check all that apply)</label>
					</div>
                    <input type="checkbox" name="operationSkills[]" value="-2" >Executive management team 
					<br><input type="checkbox" name="operationSkills[]" value="-1" >Sales team 
					<br><input type="checkbox" name="operationSkills[]" value="-0.5" >Marketing team
					<br><input type="checkbox" name="operationSkills[]" value="-0.5" >Financial team 
                    <br><input type="checkbox" name="operationSkills[]" value="-0.5" >Technology team
                    <br><input type="checkbox" name="operationSkills[]" value="-1" >Production team 
					<br><input type="checkbox" name="operationSkills[]" value="-0.5" >Administration 
                    <br><input type="checkbox" name="operationSkills[]" value="0" >Not sure
                    <br><input type="checkbox" name="operationSkills[]" value="1" >None
                    <br><input  type = "checkbox" name = "operationSkills[]" value="-1">Other
					<br><br>
                    
                    

                    
                    
                    

                    
                      <a href="section7pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                
              </div>
              <div style="text-align: center;">
              <p><em>Section 6 is a wrap!</em></p>
              <p><em>Being able to quickly identify needs and engage the right advisors/consultants can help you to compound opportunity more quickly.</em></p>
              <p><span style="color: #ff6600;"><em><strong>End of Section 6 - Business structure and organization</strong></em></span></p>
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
