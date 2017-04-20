<style>
tr,td,table
{
	font-size:20px;
	height:30px;
border-radius:6px;	
background-color:#ffe5e5	;
}
input{
	height:30px;
border-radius:6px;
background-color:#ffe5e5	;	
}

</style>
<?php
$server="localhost";
$username="root";
$dbname="Project";
session_start();
$conn2=new mysqli($server,$username,"",$dbname);
if($conn2->connect_error)
{
	echo "fail connection";
}
$data=$_SESSION['sid'];
//echo "$data";
$sql_query="select * from attendance where sid='$data'";
$result=$conn2->query($sql_query);
echo "<table border='1' width='100%' style='color:#009033;'>";
echo "<tr><td><strong>DATE</strong></td><td><strong>SUBJECT ID</strong></td><td><strong>STUDENT ID</strong></td><td><strong>REMARK</strong></td><td><strong>SEMESTER</strong></td></tr>";
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$data1=$row["date"];
		$data2=$row["sub_id"];
		$data3=$row["sid"];
		$data4=$row["remark"];
		$data5=$row["sem"];
		//echo "$data1";
	    echo "<tr><td>$data1</td><td>$data2<td>$data3</td><td>$data4</td><td>$data5</td></tr>";
	}
}
echo "</table>";
?>

