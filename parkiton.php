<?php
$con=mysqli_connect("localhost","id1700129_parking","parking","id1700129_parking");
if(mysqli_connect_errno($con))
{
	echo "A102";
} 
else
{
$query="insert into registration values('".$_GET["First_Name"]." ".$_GET["Last_Name"]."','".$_GET["Gender"]."','".$_GET["Phone_Number"]."','".$_GET["Email_Id"]."','".$_GET["Password"]."')";
$result=mysqli_query($con,$query);
echo "success";
echo $query;
}
header("Location:login.html");
?>