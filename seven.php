<?php
$user="root";
$server="localhost";
$dbname="Project";
session_start();
$conn= new mysqli($server,$user,"",$dbname);
if($conn->connect_error)
{
	echo "fail connection";
}
header("Location:index.php");
?>