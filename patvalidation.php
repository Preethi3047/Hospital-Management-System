<?php

session_start();
    
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'hmsgds');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from pattable where userid='$name' && password='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['userid']=$name;
    header('location:patientpage.php');
}
else
{
		 echo "login failed";
}


?>
