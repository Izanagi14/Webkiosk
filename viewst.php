<style>
tr,td,table
{
	font-size:20px;
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
$viewst = $_POST["stuid"];
echo"<form action='viewst.php' method='post'>";
echo "<div align='center'><pre><h2 style='color:#009033;'>STUDENT ID: <input type='text' name='stuid' style='width:200px;height:40px;border-radius:8px;font-size:20px;'>  <input type='submit' value='submit' style='border-radius:5px;background:lightblue; font-size:20px; width:100px; height:40px;'></pre></div>";
$sqlq="select batch,sem,ssn from student where sid='$viewst'";
$res=$conn->query($sqlq);
if($res->num_rows>0)
{
	echo "<table border='1' width='100%'>";
	echo "<tr><td>BATCH</td><td>SEMESTER</td><td>LOGIN ID</td><td>SUBJECT ID</td><td>T1 MARKS</td><td>T2 MARKS</td><td>T3 MARKS</td></tr>";
	  while($row=$res->fetch_assoc())
	    {
			$sql1="select * from marks where sid='$viewst'";
	        $res1=$conn->query($sql1);
			if($res1->num_rows>0)
			{
			while($row2=$res1->fetch_assoc())
			{
				$dataa=$row2["t1"];
				$dataa2=$row2["t2"];
				$dataa3=$row2["t3"];
				$dataa4=$row2["sub_id"];
	     	    $data1=$row["batch"];
	     	    $data2=$row["sem"];
		        $data3=$row["ssn"];
	         	echo"<tr><td>$data1</td><td>$data2</td><td>$data3</td><td>$dataa4</td><td>$dataa</td><td>$dataa2</td><td>$dataa3</td></tr>";
	        }
			}
}
}
else
{
	echo "<p align='center' style='font-size:20px; color:green;'>NO RESULT FOUND</p>";
}
?>