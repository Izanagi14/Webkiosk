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
$data1=$_SESSION['name'];
$sql="select * from st_info where '$data'=sid and '$data1'=name";
$res=$conn->query($sql);
echo "<table width='100%' border='2'>";
if($res->num_rows>0)
{
	echo "<tr><td>STUDENT ID</td><td>STUDENT NAME</td><td>SGPA1</td><td>SGPA2</td><td>SGPA3</td><td>SGPA4</td><td>SGPA5</td><td>SGPA6</td><td>SGPA7</td><td>SGPA8</td><td>CGPA</td></tr>";
	while($row=$res->fetch_assoc())
	{
        $dataa=$row["sem1"];
		$dataa1=$row["sem2"];
		$dataa2=$row["sem3"];
		$dataa3=$row["sem4"];
		$dataa4=$row["sem5"];
		$dataa5=$row["sem6"];
		$dataa6=$row["sem7"];
		$dataa7=$row["sem8"];
        $dataa8=$row["cgpa"];
		echo "<tr><td>$data</td><td>$data1</td><td>$dataa</td><td>$dataa1</td><td>$dataa2</td><td>$dataa3</td><td>$dataa4</td><td>$dataa5</td><td>$dataa6</td><td>$dataa7</td><td>$dataa8</td></tr>";
    }
}
else
{
	echo "<p align='center' style='font-size=20px;'>NO RESULT FOUND</p>";
}
?>