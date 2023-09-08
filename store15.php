<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');





$question151 = $_POST['15-1'];
$question152 = $_POST['15-2'];
$question153 = $_POST['15-3'];
$question154 = $_POST['15-4'];
$question155 = $_POST['15-5'];
$question156 = $_POST['15-6'];
$question157 = $_POST['15-7'];
$question158 = $_POST['15-8'];
$question159 = $_POST['15-9'];
$question1510 = $_POST['15-10'];
$question1511 = $_POST['15-11'];
$question1512 = $_POST['15-12'];
$question1513 = $_POST['15-13'];

$chkquestion1514=$_POST['15-14'];  
$question1514="";  
foreach($chkquestion1514 as &$value14)  
   {  
      $question1514= $question1514 + $value14;  
   }  

$question1515 = $_POST['15-15'];
$question1516 = $_POST['15-16'];
$question1517 = $_POST['15-17'];


$s = "select * from section15 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section15(email, question151, question152, question153, question154, question155, question156, question157, question158, question159, question1510, question1511, question1512, question1513, question1514, question1515, question1516, question1517) values ('$email', '$question151', '$question152', '$question153', '$question154', '$question155', '$question156', '$question157', '$question158', '$question159', '$question1510', '$question1511', '$question1512', '$question1513', '$question1514', '$question1515', '$question1516', '$question1517')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
