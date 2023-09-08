<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');
$finPos = $_POST['finPos'];

$checkbox1=$_POST['financed'];  
$chk="";  


   foreach($checkbox1 as &$value1)  
   {  
      $chk= $chk + $value1;  
   }  
$investPer = $_POST['investPer'];
$addInvF = $_POST['addInvF'];
$raise = $_POST['raise'];

$checkbox2=$_POST['needfor'];  
$chk2="";  

   foreach($checkbox1 as &$value2)  
   {  
      $chk2= $chk2 + $value2;  
   }  
   
$immedFunds = $_POST['immedFunds'];




$s = "select * from section4 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section4(email,finPos, financed, investPer, addInvF, raise, need, immedFunds) values ('$email', '$finPos', '$chk', '$investPer', '$addInvF', '$raise', '$chk2', '$immedFunds')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
