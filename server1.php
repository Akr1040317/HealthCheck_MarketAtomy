
<?php
$errors = array();
if(isset($_POST['submit']))
{
    $db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // receive all input values from the form
	$password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($password))
	{
		array_push($errors, '<div class="alert alert-danger" role="alert">Password is required</div>');
	}
    $query = mysqli_query($db,"SELECT * FROM users WHERE `username`.`id` = 1")
    or die(mysqli_error($db)); 

    if (mysqli_num_rows ($query)==1)
    {
        $password = md5($password);
        $query3 = mysqli_query($db,"UPDATE users SET `password`='$password' WHERE `username`.`id` = 1")
        ;

        echo  '<div class="text-center"><div class="alert alert-success" role="alert">Password Changed </div> </div>';
    }
}

?>
