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
  <title>Section 5 - Business Milestone Achievements</title>
  
 
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
                        <h1 class=" text-center login-title text-dark" style="font-size: 40px;">Section 5 - Business Milestone Achievements<h1>
                        <p class=" text-center p-1 m-0 font-ubuntu text-black-50">This section will help us to understand what you have accomplished to date in your business.</p>
                      </div>
              <div style="padding: 75px 20% 75px 20%;">
                
                  <form action="store5.php" method="post" class="form-section">
                      
                    <div class="">
						<label>What Milestones have been achieved to date? (Check all that apply)</label>
					</div>
                    <input type="checkbox" name="milestones[]" value="1" >Business appropriately established legally 
					<br><input type="checkbox" name="milestones[]" value="3" >Strategic plan developed 
					<br><input type="checkbox" name="milestones[]" value="2" >Business model developed
					<br><input type="checkbox" name="milestones[]" value="3" >Financial projections developed 
                    <br><input type="checkbox" name="milestones[]" value="2" >Business plan developed
                    <br><input type="checkbox" name="milestones[]" value="2" >Branding efforts identified 
					<br><input type="checkbox" name="milestones[]" value="3" >Marketing plan developed 
					<br><input type="checkbox" name="milestones[]" value="1" >Business launched
					<br><input type="checkbox" name="milestones[]" value="1" >Trade show participation 
                    <br><input type="checkbox" name="milestones[]" value="3" >Already generating revenue
                    <br><input type="checkbox" name="milestones[]" value="3" >Sales plan/strategy developed
					<br><input type="checkbox" name="milestones[]" value="2" >Executive team hired 
                    <br><input type="checkbox" name="milestones[]" value="0" >None
                    <br><input  type = "checkbox" name = "milestones[]" value="1">Other
                    <br><br>
                    <div class="">
						<label>What Milestones are currently in the pipeline? (Check all that apply)</label>
					</div>
                    <input type="checkbox" name="milestonesPipe[]" value="1" >Strategic plan development 
					<br><input type="checkbox" name="milestonesPipe[]" value="1" >Business model development 
					<br><input type="checkbox" name="milestonesPipe[]" value="2" >Financial projections development
					<br><input type="checkbox" name="milestonesPipe[]" value="2" >Business plan development 
                    <br><input type="checkbox" name="milestonesPipe[]" value="2" >Branding development
                    <br><input type="checkbox" name="milestonesPipe[]" value="2" >Marketing plan development 
					<br><input type="checkbox" name="milestonesPipe[]" value="2" >Sales strategy development 
					<br><input type="checkbox" name="milestonesPipe[]" value="0" >None
                    <br><br>
                    
                    <div class="">
						<label>How are you performing toward those milestone achievements?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "performing"class="" value="4" required>On schedule - no expected issues. Everything on track
						<br><input  type = "radio" name = "performing" class="" value="3" required>Currently on schedule but see some troubling areas up ahead and worried
						<br><input  type = "radio" name = "performing" class="" value="2" required>Lagging behind schedule and concerned about how to move forward
						<br><input  type = "radio" name = "performing" class="" value="1" required>Way behind schedule and struggling to get back on track
						<br><input  type = "radio" name = "performing" class="" value="0" required>Not Applicable
                    </div>
                    <br>
                    <div class="">
						<label>Are the people in place to help meet these milestones?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "peopleInP"class="" value="2" required>Yes
						<br><input  type = "radio" name = "peopleInP" class="" value="1" required>No
						<br><input  type = "radio" name = "peopleInP" class="" value="0" required>Not Sure
                    </div>
                    <br>
                    <div class="">
						<label>What is your exit strategy?</label>
					</div>
					<div align="left">
						<input type = "radio" name = "exit"class="" value="1" >Grow business then sell it
						<br><input  type = "radio" name = "exit" class="" value="1" >Pass business on to heirs
						<br><input  type = "radio" name = "exit" class="" value="1" >Franchise or license it
						<br><input  type = "radio" name = "exit" class="" value="0" >Haven't though about it
            <br><input  type = "radio" name = "exit" class="" value="0">Other
          </div>

                    <br>

                      <a href="section6pre.php"><button type="submit" name = "next1" class="btn btn-primary">Next</button></a>
                
                  </form> 
      
                  
                
               
                
                
              </div>
              <div style="text-align: center;">
              <p><em>Section 5 is complete! You are awesome. :-) By having solid plans in place, your team can remain on the same page and headed in the same direction related to the mission, vision, and goals of the business.</em></p>
              <span style="color: #ff6600;"><em><strong>End of Section 5 - Business Milestone Achievements</strong></em></span></p>
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
