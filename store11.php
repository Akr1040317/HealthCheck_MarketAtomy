<?php

session_start();

$email = $_SESSION['email'];
$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');



$revStream = $_POST['revStream'];
$revStreamInc = $_POST['revStreamInc'];
$salesPatterns = $_POST['salesPatterns'];
$performance = $_POST['performance'];
$realistic = $_POST['realistic'];

$checkbox1=$_POST['limitingFactors'];  
$chk="";  

   foreach($checkbox1 as &$value1)  
   {  
      $chk= $chk + $value1;  
   }  

$s = "select * from section11 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section11(email, revStream, revStreamInc, salesPatterns, performance, realistic, limitingFactors) values ('$email','$revStream','$revStreamInc', '$salesPatterns','$performance','$realistic','$chk')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
