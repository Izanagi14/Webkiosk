<style>
tr,td{
border-radius:6px;	
}
</style>
<?php
session_start();
$username="root";
$server="localhost";
$dbname="Project";
$s=0;
$conn=new mysqli($server,$username,"",$dbname);
if($conn->connect_error)
{
 echo "fail connection";
}
$data=$_SESSION['name'];
$data2=$_SESSION['fid'];
$sql1="select batch from faculty where fid='$data2'";
$res=$conn->query($sql1);

echo"<form action='upatt.php' method='post'>";
echo " <pre style='margin-left:25%;' style='color:red;';><nobr style='color:green;font-size:20px;'>DATE : </nobr></font><input type='date' name='date' style='height:35px;width:160px;border-radius:10px;font-size:20px;color:darkcyan;'>";
echo " <font size='6'> <nobr style='color:green;font-size:20px;'> SUBJECT ID : </nobr></font><input type='text' name='subid' align='center' style='height:35px;width:150px;border-radius:10px;font-size:20px;'></pre>";
echo"<table width='100%' border='1' style='font-size:20px;background-color:#FFF8DC;border-radius:6px;'>";
if($res->num_rows>0)
{
	while($row=$res->fetch_assoc())
	{
		$dataa=$row["batch"];
		$sql2="select sid,ssn from student where batch='$dataa'";
		$res2=$conn->query($sql2);
		if($res->num_rows>0)
		{
					echo "<tr><td>SID</td><td>SSN</td><td>NAME</td><td>REMARK</td></tr>";
			while($row2=$res2->fetch_assoc())
			{
				$data3=$row2["sid"];
				$data4=$row2["ssn"];
				$sql3="select name from people where ssn='$data4'";
				$res5=$conn->query($sql3);
				if($res5->num_rows>0)
				{
					while($row5=$res5->fetch_assoc())
					{
						
						$data7=$row5["name"];
						$_SESSION['sname']=$data7;
						$_SESSION['sssn']=$data4;
						$_SESSION['ssid']=$data3; 
						echo "<tr><td>$data3</td><td>$data4</td><td>$data7</td><td><input type ='radio' name='attendances[$s]' value='PRESENT' style='width: 15px;height: 20px;'>PRESENT<input type='radio' name='attendances[$s]' value='ABSENT' style='width: 15px;height: 20px;'>ABSENT</td></tr>";
						$s++;
					}
					}
			}
		}
		echo "</table>";
		echo"<br><div align='center'><input type='submit' value='SUBMIT' style='width:100px;height:30px;border-radius:6px; background-color:lightblue;'></div></form>";
	}
}


?>