<?php 
$username="root";
$server="localhost";
$dbname="Project";
$conn=new mysqli($server,$username,"",$dbname);
if($conn->connect_error)
{
 echo "fail connection";
}
$uid=$_POST["username"];
$pwd=$_POST["password"];
$set=$_POST["member"];
if($set==="STUDENT")
{
$sql_query="select * from people where ssn='$uid' and password='$pwd'";
$result=$conn->query($sql_query);
if($result->num_rows>0)
	echo "login success";
else
	echo "<script type='text/javascript'>prompt('WRONG PASSWORD OR USERNAME')</script>";
}
if($set="ADMINISTRATOR")
{
	$sql_query1="select * from administrator where usid='$uid' and password='$pwd'";
	$result1=$conn->query($sql_query1);
	if($result1->num_rows>0)
	{
		echo "hello";
		header("Location:admin.html");
	}
}
?>