<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');



$sales = $_POST['sales'];
$projection = $_POST['projection'];
$track = $_POST['track'];
$revenue = $_POST['revenue'];
$internal = $_POST['internal'];
$responsible = $_POST['responsible'];
$salespeople = $_POST['salespeople'];
$established = $_POST['established'];

$checkbox1=$_POST['compensated'];  
$chk="";  
foreach($checkbox1 as &$value1)  
   {  
      $chk= $chk + $value1;  
   }  

$goals = $_POST['goals'];
$training = $_POST['training'];
$relationship = $_POST['relationship'];
$cycle = $_POST['cycle'];
$export = $_POST['export'];

$s = "select * from section12 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section12(email, sales, projection, revenue, track, internal, responsible, salespeople, established, compensated, goals, training, relationship, cycle, export) values ('$email','$sales','$projection', '$revenue','$track','$internal','$responsible','$salespeople','$established','$chk','$goals','$training','$relationship','$cycle','$export')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
