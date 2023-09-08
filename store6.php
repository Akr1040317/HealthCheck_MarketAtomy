<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');


$homeOrAdd = $_POST['homeOrAdd'];
$employ = $_POST['employ'];
$employFull = $_POST['employFull'];
$hr = $_POST['hr'];
$it = $_POST['it'];
$defCulture = $_POST['defCulture'];
$turnover = $_POST['turnover'];
$teamEng = $_POST['teamEng'];
$polApro = $_POST['polApro'];
$jobDesc = $_POST['jobDesc'];
$review = $_POST['review'];
$benefits = $_POST['benefits'];
$newEmploy = $_POST['newEmploy'];
$external = $_POST['external'];
$partTime = $_POST['partTime'];


$checkbox1=$_POST['operationSkills'];  
$chk="";  

   foreach($checkbox1 as &$value1)  
   {  
      $chk= $chk + $value1;  
   }  
$s = "select * from section6 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section6(email,homeOrAdd, employ, employFull, hr, it, defCulture, turnover, teamEng, polApro, jobDesc, review, benefits, newEmploy, external, partTime, operationSkills) values ('$email', '$homeOrAdd', '$employ', '$employFull', '$hr', '$it', '$defCulture', '$turnover', '$teamEng', '$polApro', '$jobDesc', '$review', '$benefits', '$newEmploy', '$external', '$partTime', '$chk')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
