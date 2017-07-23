<?php 
session_start();
include("common/connection.php");
$conn = connect();

$email=$_GET["email"];
$password=$_GET["pass"];
if(mysqli_connect_errno($con))
{
	echo "A102";
}
else
{
	$query="select * from newuser where email='$email' and password='$pass'";
	$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==0)
{
echo "Incorrect Username or Password";
//echo $query;
}
else
{
	echo "login successful";
header("Location:main.php");
	
}
}
?>