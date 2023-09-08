<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');





$question171 = $_POST['17-1'];
$question172 = $_POST['17-2'];

$chkquestion173=$_POST['17-3'];  
$question173="";  
foreach($chkquestion173 as &$value3)  
   {  
      $question173= $question173 + $value3;  
   }  

$question174 = $_POST['17-4'];
$question175 = $_POST['17-5'];




$s = "select * from section17 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section17(email, question171, question172, question173, question174, question175) values ('$email', '$question171', '$question172', '$question173', '$question174', '$question175')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
