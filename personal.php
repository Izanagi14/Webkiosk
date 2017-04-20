<html>
<head>
<h1 align="center"> Student </h1>
<style>
body {
background: #f06;
background: linear-gradient(45deg, #f06, yellow);
min-height: 100%;
}
div {
    width: 100px;
    height: 100px;
    background-color: red;
    position: relative;
    -webkit-animation-name: example; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 4s; /* Chrome, Safari, Opera */
    -webkit-animation-iteration-count: 3; /* Chrome, Safari, Opera */
    animation-name: example;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes example {
    0%   {background-color:red; left:0px; top:0px;}
    25%  {background-color:yellow; left:200px; top:0px;}
    50%  {background-color:blue; left:200px; top:200px;}
    75%  {background-color:green; left:0px; top:200px;}
    100% {background-color:red; left:0px; top:0px;}
}
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
</head>
</html>
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
$sql="select * from student";
$res=$conn->query($sql);
echo "<table width='100%' border='2'>";
if($res->num_rows>0)
{
  echo "<tr><td>STUDENT ID</td><td>NAME</td><td>BATCH</td><td>SOCIAL SECURITY NUMBER</td><td>SEMESTER</td><td>GENDER</td><td>PASSWORD</td><td>SUBJECT ID</td><td>SUBJECT NAME</td></tr>";
while($row=$res->fetch_assoc())
{
    $data1=$row["batch"];
	$data2=$row["sid"];
	$data3=$row["sem"];
	$data4=$row["ssn"];
	$sql2="select * from people where '$data4'=ssn";
	$res2=$conn->query($sql2);
	while($row2=$res2->fetch_assoc())
	{
		$data6=$row2["gender"];
		$data7=$row2["name"];
		$data8=$row2["password"];
		$sql3="select * from st_sub where '$data2'=sid";
		$res3=$conn->query($sql3);
		while($row4=$res3->fetch_assoc())
		{
			$data9=$row4["sub_id"];
			$sql4="select * from subject where '$data9'=sub_id";
			$res4=$conn->query($sql4);
			while($row5=$res4->fetch_assoc())
			{
				$data11=$row5["sub_name"];
			   echo "<tr><td>$data2</td><td>$data7</td><td>$data1</td><td>$data4</td><td>$data3</td><td>$data6</td><td>$data8</td><td>$data9</td><td>$data11</td></tr>";
			}
		}
	}
}
echo "</table>";
}
else
{
	echo "<p align='center' style='font-size:20px;'>";
}
?>