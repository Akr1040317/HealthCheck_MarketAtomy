<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');

$question161 = $_POST['16-1'];
$question162 = $_POST['16-2'];
$question163 = $_POST['16-3'];
$question164 = $_POST['16-4'];
$question165 = $_POST['16-5'];
$question166 = $_POST['16-6'];
$question167 = $_POST['16-7'];
$question168 = $_POST['16-8'];
$question169 = $_POST['16-9'];
$question1610 = $_POST['16-10'];
$question1611 = $_POST['16-11'];
$question1612 = $_POST['16-12'];
$question1613 = $_POST['16-13'];
$question1614 = $_POST['16-14'];
$question1615 = $_POST['16-15'];
$question1616 = $_POST['16-16'];
$question1617 = $_POST['16-17'];
$question1618 = $_POST['16-18'];
$question1619 = $_POST['16-19'];




$s = "select * from section16 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section16(email, question161, question162, question163, question164, question165, question166, question167, question168, question169, question1610, question1611, question1612, question1613, question1614, question1615, question1616, question1617, question1618, question1619) values ('$email', '$question161', '$question162', '$question163', '$question164', '$question165', '$question166', '$question167', '$question168', '$question169', '$question1610', '$question1611', '$question1612', '$question1613', '$question1614', '$question1615', '$question1616', '$question1617', '$question1618', '$question1619')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
