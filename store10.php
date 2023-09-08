<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');



$sold = $_POST['sold'];
$scale = $_POST['scale'];
$future = $_POST['future'];
$profitable = $_POST['profitable'];
$geo = $_POST['geo'];
$physical = $_POST['physical'];
$market = $_POST['market'];
$product = $_POST['product'];


$s = "select * from section10 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section10(email, sold, scale, future, profitable, geo, physical, market, product) values ('$email','$sold','$scale', '$future','$profitable','$geo','$physical','$market','$product')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
