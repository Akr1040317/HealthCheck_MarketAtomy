<?php

session_start();

$email = $_SESSION['email'];

$con = mysqli_connect('localhost','marketat_akshatR','akshat03');
$db= mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user', 3306);
mysqli_select_db($con, 'marketat_verify-user');

$checkbox1=$_POST['milestones'];  
$chk="";  
foreach($checkbox1 as &$value1)  
   {  
      $chk= $chk + $value1;  
   }  

$checkbox2=$_POST['milestonesPipe'];  
$chk2="";  

foreach($checkbox1 as &$value2)  
   {  
      $chk2= $chk2 + $value2;  
   }  

   
$performing = $_POST['performing'];
$peopleInP = $_POST['peopleInP'];
$exit = $_POST['exit'];


$s = "select * from section5 where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Seems like you already have an account, please login.";
} else {
    $query3 = mysqli_query($db,"UPDATE users SET `sectionNum`=sectionNum + 1 WHERE `email`= '$email'");
    
    $reg = " insert into section5(email,mileStones, pipeLine, performing, peopleInP, exitStrat) values ('$email','$chk','$chk2','$performing','$peopleInP','$exit')";
    mysqli_query($con, $reg);
    header('location: navigate.php');
}

?>
