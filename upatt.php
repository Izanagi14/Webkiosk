<?php
session_start();
$username="root";
$server="localhost";
$dbname="Project";
$conn=new mysqli($server,$username,"",$dbname);
if($conn->connect_error)
{
 echo "fail connection";
}
$date=$_POST["date"];
$sub=$_POST["subid"];
$data=$_SESSION['sname'];
$data2=$_SESSION['sssn'];
$data3=$_SESSION['ssid'];
$atten=$_POST['attendances'];
$sem=3;
for($i=0;$i<sizeof($atten);$i++)
{
	$sql="insert into attendance values('$date','$sub','$data3','$atten[$i]','$sem')";
	$res=$conn->query($sql);
}
?>