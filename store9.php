<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');


$prop = $_POST['prop'];
$patents = $_POST['patents'];
$ip = $_POST['ip'];
$ipAttorney = $_POST['ipAttorney'];
$infringement = $_POST['infringement'];
$counterfeit = $_POST['counterfeit'];


$s = "select * from section9 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section9(email, prop, patents, ip, ipAttorney, infringement, counterfeit) values ('$email','$prop','$patents', '$ip','$ipAttorney','$infringement','$counterfeit')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
