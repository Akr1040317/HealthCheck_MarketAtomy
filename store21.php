<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');

$chkquestion211=$_POST['21-1'];  
$question211="";  
foreach($chkquestion211 as &$value1)  
   {  
      $question211= $question211 + $value1;  
   }   

$chkquestion212=$_POST['21-2'];  
$question212="";  
foreach($chkquestion212 as &$value)  
   {  
      $question212= $question212 + $value;  
   }  


$question213 = $_POST['21-3'];
$question214 = $_POST['21-4'];
$question215 = $_POST['21-5'];
$question216 = $_POST['21-6'];
$question217 = $_POST['21-7'];



$s = "select * from section21 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section21(email, question211, question212, question213, question214, question215, question216, question217) values ('$email', '$question211', '$question212', '$question213', '$question214', '$question215', '$question216', '$question217')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
