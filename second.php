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
$data2=$_SESSION['sid'];
$sql_query1="select gender,password from people natural join student where sid='$data2'";
$result=$conn->query($sql_query1);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
	$daa=$row["gender"];
    $daa2=$row["password"];
	echo "<div align='center'><pre><h2 style='color:purple;'>GENDER : $daa  PASSWORD: $daa2";
}
}
?>
</html>