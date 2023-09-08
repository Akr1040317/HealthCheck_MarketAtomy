<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');





$question131 = $_POST['13-1'];
$question132 = $_POST['13-2'];
$question133 = $_POST['13-3'];
$question134 = $_POST['13-4'];
$question135 = $_POST['13-5'];
$question136 = $_POST['13-6'];
$question137 = $_POST['13-7'];
$question138 = $_POST['13-8'];
$question139 = $_POST['13-9'];


$s = "select * from section13 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section13(email, question131, question132, question133, question134, question135, question136, question137, question138, question139) values ('$email', '$question131', '$question132', '$question133', '$question134', '$question135', '$question136', '$question137', '$question138', '$question139')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
