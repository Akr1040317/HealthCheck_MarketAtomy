<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');


$sell = $_POST['sell'];
$character = $_POST['character'];
$provOCrea = $_POST['provOCrea'];
$manufact = $_POST['manufact'];
$mvp = $_POST['mvp'];
$netProfit = $_POST['netProfit'];
$likeTo = $_POST['likeTo'];
$drive = $_POST['drive'];

$s = "select * from section8 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section8(email, sell, charac, provOCrea, manufact, mvp, netProfit, likeTo, drive) values ('$email','$sell','$character', '$provOCrea','$manufact','$mvp','$netProfit','$likeTo','$drive')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
