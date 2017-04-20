<style>
tr,td,table
{
	font-size:20px;
	height:30px;
border-radius:6px;	
background-color:#FFF8DC;
}
input{
	height:30px;
border-radius:6px;
background-color:#FFF8DC;	
}
</style>
<?php
$username="root";
$server="localhost";
$dbname="Project";
$conn=new mysqli($server,$username,"",$dbname);
if($conn->connect_error)
{
 echo "fail connection";
}
session_start();
$data=$_SESSION['sid'];
$sql="select * from marks where '$data'=sid";
$res=$conn->query($sql);
echo "<table width='100%' border='2'>";
if($res->num_rows>0)
{
	echo "<tr><td>SUBJECT ID</td><td>SUBJECT NAME</td><td>SEMESTER</td><td>T1 MARKS</td><td>T2 MARKS</td><td>T3 MARKS</td></tr>";
	while($row=$res->fetch_assoc())
	{
		$dta1=$row["t1"];
		$dta2=$row["t2"];
		$dta3=$row["t3"];
		$dta4=$row["sub_id"];
		$dta5=$row["sid"];
		$dta6=$row["sem"];
		$sql2="select sub_name from subject where '$dta4'=sub_id";
		$ress=$conn->query($sql2);
		if($ress->num_rows>0)
		{
			while($row2=$ress->fetch_assoc())
			{
				$dataa=$row2["sub_name"];
				echo "<tr><td>$dta4</td><td>$dataa</td><td>$dta6</td><td>$dta1</td><td>$dta2</td><td>$dta3</td></tr>";
			}
		}
        		
	}
}
else
	echo "<p align='center' style='color:green; font-size:20px;'>NO RESULT FOUND</p>";
?>