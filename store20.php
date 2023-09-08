<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');





$question201 = $_POST['20-1'];

$chkquestion202=$_POST['20-2'];  
$question202="";  
foreach($chkquestion202 as &$value2)  
   {  
      $question202= $question202 + $value2;  
   }  

$question203 = $_POST['20-3'];
$question204 = $_POST['20-4'];
$question205 = $_POST['20-5'];
$question206 = $_POST['20-6'];
$question207 = $_POST['20-7'];
$question208 = $_POST['20-8'];
$question209 = $_POST['20-9'];
$question2010 = $_POST['20-10'];
$question2011 = $_POST['20-11'];
$question2012 = $_POST['20-12'];
$question2013 = $_POST['20-13'];



$s = "select * from section20 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section20(email, question201, question202, question203, question204, question205, question206, question207, question208, question209, question2010, question2011, question2012, question2013) values ('$email', '$question201', '$question202', '$question203', '$question204', '$question205', '$question206', '$question207', '$question208', '$question209', '$question2010', '$question2011', '$question2012', '$question2013')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
