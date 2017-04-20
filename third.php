<html>
<?php
$username="root";
$servername="localhost";
$databasename="Project";
$conn=new mysqli($servername,$username,"",$databasename);
session_start();
if($conn->connect_error)
{
	echo "Fail Connection";
}
$data=$_SESSION['name'];
$data2=$_SESSION['fid'];
$sql_query1="select gender,password,qualification from people natural join faculty where fid='$data2'";
$result=$conn->query($sql_query1);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
	$daa=$row["gender"];
    $daa2=$row["password"];
	$daa3=$row["qualification"];
	echo "<div align='center'><pre><h2 style='color:red;'>GENDER : $daa  PASSWORD: $daa2  QUALIFICATION : $daa3";
}
}
?>
</html>