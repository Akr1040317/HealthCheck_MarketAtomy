
<?php

error_reporting(0);
session_start();

$errors ='';
$conn= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $query = "select * from users where email='$email'";
    $run = mysqli_query($conn, $query);
    if(mysqli_num_rows($run)>0){
        $row = mysqli_fetch_array($run);
        $db_email = $row['email'];
        $db_id = $row['id'];
        $token = uniqid(md5(time()));
        $query = "INSERT INTO password_reset (id, email, token) VALUES(NULL,'$email', '$token')";
        if(mysqli_query($conn, $query)){

                try {
                    $to = $email;

                    $subject = 'Reset your Business Health Check Assessment Password';
                    
                    
                    $message = '
                    <h1>Password Reset</h1> <h4>It looks like you forgot your passowrd. Please click on the link below to reset it.</h4>  <a href= "https://healthcheck.marketatomy.com/reset.php" ><h2>Reset Password</h2> </a>
                    <h4>Still having trouble with your password? Please refer to the following tips!</h4>
                    <ul>
                      <li>Password reset links are only valid for up to 6 hours. If it has been more than 6 hours since you requested the reset, 
                      please request another password reset and check your email for a new link.
                      </li>
                      <li>If you requested multiple password resets, please click on the link in the most recently viewed email.</li>
                      <li>If you are still having problems, feel free to contact us at <a href= "mailto:marketathealth@healthcheck.marketatomy.com> marketathealth@healthcheck.marketatomy.com</a></li>
                    </ul> 
                    <h4>If you did not request this password reset, please ignore this email.</h4>
                    ';
                    
                    
                    
                    $headers = "From: MarketAtomy LLC <marketathealth@healthcheck.marketatomy.com>\r\n";
                    $headers .= "Reply-To: marketathealth@healthcheck.marketatomy.com\r\n";
                    $headers .= "Content-type: text/html\r\n";
                    
                    mail($to, $subject, $message, $headers);
                
                
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }


                    $msg = "<div class='alert alert-success'>Password reset link has been sent to the email.</div>";
        
                    
        }
        else {
            $msg = "<div class='alert alert-danger'>User not found.</div>";
        }
    }
}
       
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Forgot Password</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login3.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          
          <div class="col-md-7">
            <div class="card-body">
              
                <div class="card-body px-lg-5 pt-0">
                  <!-- Form -->
                  <div class="brand-wrapper">
                    <img src="assets/images/BHA.png" alt="logo" class="logo">
                  </div>
                  <h1>Forgot Password</h1>
                  <p  style=" float: left; width: 75%;font-size: 15px;">Enter your email address & we'll send you a link to reset your password</p>
                  <form class="text-center"action="" method="POST">
                        <!-- Email -->
                        <div class="md-form">
                        <?= $errors?>
                            <input type="email"name="email" id="email" class="form-control" placeholder="E-mail">
                        </div>
                        <?php if(isset($msg)){
                            echo $msg;}?>
                        <!-- Sign in button -->
                        <button class="btn  btn-rounded btn-block my-4 waves-effect z-depth-0" style="background-color: rgba(0, 255, 0, 0.4);" type="submit" name="submit" value="Send">Send</button>
                        
                    </form>
                  <!-- Form -->
                  </div>
                  
            </div>
          </div>
          <div class="col-md-5">
            <img src="assets/images/Operations.jpg" alt="login" class="login-card-img">
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
