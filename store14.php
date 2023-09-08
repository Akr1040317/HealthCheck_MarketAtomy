<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');





$question141 = $_POST['14-1'];
$question142 = $_POST['14-2'];
$question143 = $_POST['14-3'];
$question144 = $_POST['14-4'];
$question145 = $_POST['14-5'];
$question146 = $_POST['14-6'];
$question147 = $_POST['14-7'];
$question148 = $_POST['14-8'];
$question149 = $_POST['14-9'];
$question1410 = $_POST['14-10'];
$question1411 = $_POST['14-11'];
$question1412 = $_POST['14-12'];


$s = "select * from section14 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section14(email, question141, question142, question143, question144, question145, question146, question147, question148, question149, question1410, question1411, question1412) values ('$email', '$question141', '$question142', '$question143', '$question144', '$question145', '$question146', '$question147', '$question148', '$question149', '$question1410', '$question1411', '$question1412')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
