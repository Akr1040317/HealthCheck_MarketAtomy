<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');




$question21 = $_POST['2-1'];
$question22 = $_POST['2-2'];
$question23 = $_POST['2-3'];
$question24 = $_POST['2-4'];
$question25 = $_POST['2-5'];
$question26 = $_POST['2-6'];
$question27 = $_POST['2-7'];
$question28 = $_POST['2-8'];
$question29 = $_POST['2-9'];
$question210 = $_POST['2-10'];

$chkquestion211=$_POST['2-11'];  
$question211="";  


   foreach($chkquestion211 as &$value3)  
   {  
      $question211= $question211 + $value3;  
   }  

$s = "select * from section2 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section2(email, question21, question22, question23, question24, question25, question26, question27, question28, question29, question210, question211) values ('$email', '$question21', '$question22', '$question23', '$question24', '$question25', '$question26', '$question27', '$question28', '$question29', '$question210', '$question211')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
