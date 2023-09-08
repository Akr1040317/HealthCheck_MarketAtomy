<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');





$question191 = $_POST['19-1'];
$question192 = $_POST['19-2'];
$question193 = $_POST['19-3'];
$question194 = $_POST['19-4'];
$question195 = $_POST['19-5'];
$question196 = $_POST['19-6'];
$question197 = $_POST['19-7'];
$question198 = $_POST['19-8'];
$question199 = $_POST['19-9'];
$question1910 = $_POST['19-10'];
$question1911 = $_POST['19-11'];
$question1912 = $_POST['19-12'];
$question1913 = $_POST['19-13'];
$question1914 = $_POST['19-14'];
$question1915 = $_POST['19-15'];
$question1916 = $_POST['19-16'];

$s = "select * from section19 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section19(email, question191, question192, question193, question194, question195, question196, question197, question198, question199, question1910, question1911, question1912, question1913, question1914, question1915, question1916) values ('$email', '$question191', '$question192', '$question193', '$question194', '$question195', '$question196', '$question197', '$question198', '$question199', '$question1910', '$question1911', '$question1912', '$question1913', '$question1914', '$question1915', '$question1916')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
