<?php
function connect(){
	$hostname = "localhost";
	$user = "root";
	$password = "ggits";
	$dbname = "park";

	$conn = mysqli_connect($hostname,$user,$password,$dbname);
	return $conn;
}
?>