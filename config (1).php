<?

$con = mysqli_connect('localhost','root', '');
$db=mysqli_connect("localhost","root","","verify-user");
mysqli_select_db($con, 'verify-user');
?>