<?php
include('header.php');
$conn= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
if(isset($_GET['token'])){
    $token = mysqli_real_escape_string($conn, $_GET['token']);
    $query = "select * from password_reset where token='$token'";
    $run = mysqli_query($conn, $query);
    if(mysqli_num_rows($run)>0){
        $row = mysqli_fetch_array($run);
        $token = $row['token'];
        $email = $row['email'];
    }else{
        header('location:index.php');
    }
}


$conn= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
    if(isset($_POST['submit'])){
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
        
        $hashed = md5($password);
        if($password != $confirmpassword){
            $msg = "<div class='alert alert-danger'>Sorry, passwords do not match</div>";
        } else if(strlen($password)<6){
            $msg = "<div class='alert alert-danger'>Password must be 6 characters long.</div>";
        } else {
            $query = "update users set password='$hashed' where email='$email'";
            mysqli_query($conn, $query);
            $query = "delete from password_reset where email='$email'";
            mysqli_query($conn, $query);
            $msg = "<div class='alert alert-success'>Password Updated.</div>";
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/login.png" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              
                <div class="card-body px-lg-5 pt-0">
                  <!-- Form -->
                  <form class="text-center"action="" method="post">
                    
                        <!-- Email -->
                        
                        <!-- Password -->
                        <div class="md-form">
                            <input type="text" name="" id="" readonly class="form-control" value="<?php echo $email; ?>">
                        </div> 
                        <div class="md-form">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div> 
                        <div class="md-form">
                            <input type="password" name="confirmpassword" id="password" class="form-control" placeholder="Confirm Password">
                        </div> 
                        
                         <?php if(isset($msg)){ echo $msg;} ?>
                        <!-- Sign in button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit">Reset Password</button>
                        <a href="index.php"><button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="signin">Done</button></a>
                    </form>
                  
                  <!-- Form -->
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
