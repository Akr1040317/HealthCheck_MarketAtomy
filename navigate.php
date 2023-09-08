<?php

session_start();

$db = mysqli_connect('localhost','marketat_akshatR','akshat03','marketat_verify-user');
$person = $_SESSION['email'];
$query = $db->prepare("SELECT sectionNum FROM users WHERE email='$person'"); // prepate a query
// binding parameters via a safer way than via direct insertion into the query. 'i' tells mysql that it should expect an integer.
$query->execute(); // actually perform the query
$result = $query->get_result(); // retrieve the result so it can be used inside PHP
$r = $result->fetch_array(MYSQLI_ASSOC); // bind the data from the first result row to $r
$section =  $r['sectionNum'];
if ($section == 0)
{
    header('location: welcome.php');
    
}
elseif($section == 1)
{
    header('location: section2pre.php');
}
elseif ($section == 2)
{
    header('location: section3pre.php');
}
elseif ($section == 3)
{
    header('location: section4pre.php');
}
elseif ($section == 4)
{
    header('location: section5pre.php');
}
elseif ($section == 5)
{
    header('location: section6pre.php');
}
elseif ($section == 6)
{
    header('location: section7pre.php');
}
elseif ($section == 7)
{
    header('location: section8pre.php');
}
elseif ($section == 8)
{
    header('location: section9pre.php');
}
elseif ($section == 9)
{
    header('location: section10pre.php');
}
elseif ($section == 10)
{
    header('location: section11pre.php');
}
elseif ($section == 11)
{
    header('location: section12pre.php');
}
elseif ($section == 12)
{
    header('location: section13pre.php');
}
elseif ($section == 13)
{
    header('location: section14pre.php');
}
elseif ($section == 14)
{
    header('location: section15pre.php');
}
elseif ($section == 15)
{
    header('location: section16pre.php');
}
elseif ($section == 16)
{
    header('location: section17pre.php');
}
elseif ($section == 17)
{
    header('location: section18pre.php');
}
elseif ($section == 18)
{
    header('location: section19pre.php');
}
elseif ($section == 19)
{
    header('location: section20pre.php');
}
elseif ($section == 20)
{
    header('location: section21pre.php');
}
elseif ($section == 21)
{
    header('location: calculate.php');
}

?>
