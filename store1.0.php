<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');

$name = $_POST['business'];
$address = $_POST['address'];
$addressOn = $_POST['addressOn'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$phoneNumber = $_POST['phoneNumber'];
$businessType = $_POST['businessType'];
$primaryContact = $_POST['primaryContact'];
$primaryContactNumber = $_POST['primaryContactNumber'];
$primaryContactEmail = $_POST['primaryContactEmail'];
$legalStatus = $_POST['legalStatus'];
$startup = $_POST['startup'];
$country = $_POST['country'];

$s = "select * from section where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section(email,name, address, addressOn, city, state, zipcode, country, phoneNumber, businessType, primaryContact, primaryContactNumber, primaryContactEmail, legalStatus, startup) values ('$email','$name', '$address','$addressOn', '$city', '$state', '$zipcode', '$country', '$phoneNumber', '$businessType','$primaryContact', '$primaryContactNumber', '$primaryContactEmail', '$legalStatus', '$startup')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
