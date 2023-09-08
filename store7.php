<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');


$othExe = $_POST['othExe'];

$checkbox1=$_POST['execFunct'];  
$chk="";  
foreach($checkbox1 as &$value1)  
   {  
      $chk= $chk + $value1;  
   }  

$prevBus = $_POST['prevBus'];
$shares = $_POST['shares'];
$invested = $_POST['invested'];
$directEmploy = $_POST['directEmploy'];
$boDi = $_POST['boDi'];
$adBo = $_POST['adBo'];
$external = $_POST['external'];

$s = "select * from section7 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section7(email, othExe, execFunct, prevBus, shares, invested, directEmploy, boDi, adBo, external) values ('$email','$othExe','$chk', '$prevBus','$shares','$invested','$directEmploy','$boDi','$adBo','$external')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
