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
$data=$_SESSION['batch'];
echo "<div align='center'><pre><h2 style='color:#009033;'>BATCH: $data</pre></div>";
echo "<div align='center'><pre><h2 style='color:#009033;'>EXAM: <input type='text' name='exam'> SUBJECT ID: <input type='text' name='subid'> SEM : <input type='number' name='sem'></pre></div>";
echo "<form action='ii.php' method='post'>";
$s=0;
echo "<table border='1' width='100%' >";
echo "<tr><td>STUDENT ID</td><td>NAME</td><td>MARKS</td></tr>";
$sql="select sid,ssn,sem from student where batch='$data'";
$res=$conn->query($sql);
if($res->num_rows>0)
{
	while($row=$res->fetch_assoc())
	{
		$data1=$row["ssn"];
		$data2=$row["sid"];
		$data9=$row["sem"];
	    $sql2="select name from people where ssn='$data1'";
        $res2=$conn->query($sql2);
		if($res2->num_rows>0)
		{
			while($row2=$res2->fetch_assoc())
				{
					$data4=$row2["name"];
					echo "<tr><td>$data2</td><td>$data4</td><td>
					<input type='text' name='name[$s]' style=' width:100%; border:0px;height:100%;'>";
					$s++;
				}
		}
	}
	echo"</table>";
	echo"<br><div align='center'><input type='submit' value='SUBMIT' style='width:100px;height:30px;border-radius:6px; background-color:lightblue;'></div></form>";
}
?>