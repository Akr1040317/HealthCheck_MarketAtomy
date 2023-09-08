<?php

session_start();

$con = mysqli_connect('localhost','akshat03', 'Akek0317');
$db=mysqli_connect("localhost","akshat03","Akek0317","marketat_health");
mysqli_select_db($con, 'marketat_health');

$h1 = $_POST['business'];
$reg = " insert into test(h1) values ('$h1')";
mysqli_query($con, $reg);


?>
