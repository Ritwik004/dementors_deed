<?php 
session_start();
include("common/connection.php");
$conn = connect();

if(mysqli_connect_errno($con))
{
	echo "A102";
}
else
{

$query="insert into main values('".$_GET["place"]."','".$_GET["vehicle_type"]."','".$_GET["type_of_stay"]."')";
$result=mysqli_query($con,$query);
echo "success";
echo $query;
header("Location:book.html");
}

?>