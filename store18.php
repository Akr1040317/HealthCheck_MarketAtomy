<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');





$question1 = $_POST['18-1'];
$question2 = $_POST['18-2'];
$question3 = $_POST['18-3'];
$question4 = $_POST['18-4'];
$question5 = $_POST['18-5'];



$s = "select * from section18 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section18(email, question1, question2, question3, question4, question5) values ('$email', '$question1', '$question2', '$question3', '$question4', '$question5')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
