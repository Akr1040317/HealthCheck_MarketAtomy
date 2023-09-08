<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');




$soleOwn = $_POST['soleOwn'];
$sepApprov = $_POST['sepApprov'];
$minority = $_POST['minority'];
$stock = $_POST['stock'];
$allianPart = $_POST['allianPart'];



$s = "select * from section3 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section3(email,soleOwn,sepApprov, minority, stock, allianPart) values ('$email', '$soleOwn', '$sepApprov', '$minority', '$stock', '$allianPart')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
