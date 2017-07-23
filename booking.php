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
$query="insert into book values('".$_GET["slot"]." ".$_GET["from_time"]."','".$_GET["to_time"]."',)";
$result=mysqli_query($con,$query);
echo "success";
echo $query;
}
header("Location:payment.html");
?>