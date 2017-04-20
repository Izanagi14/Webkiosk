<html>
<head>
<h1 align="center" > FACULTY </h1>
<style>
body {
background: #f06;
background: linear-gradient(45deg, #f06, red);
min-height: 100%;
}
div {
    width: 100px;
    height: 100px;
    background-color: blue;
    position: relative;
    -webkit-animation-name: example; 
    -webkit-animation-duration: 4s;
    -webkit-animation-iteration-count: 3;
    animation-name: example;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}
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
$username="root";
$server="localhost";
$dbname="Project";
$conn=new mysqli($server,$username,"",$dbname);
if($conn->connect_error)
{
 echo "fail connection";
}
$sql="select * from faculty";
$result=$conn->query($sql);
echo "<table border='2' width='100%'>";
if($result->num_rows>0)
{
	echo "<tr><td>FACULTY ID</td><td>FACULTY NAME</td><td>SOCIAL SECURITY NUMBER</td><td>GENDER</td><td>PASSWORD</td><td>QUALIFICATION</td><td>BATCH</td><td>SALARY</td><td>SUBJECT ID</td><td>SUBJECT NAME</td></tr>";
	while($row1=$result->fetch_assoc())
   {
		   $data1=$row1['fid'];
		   $data2=$row1["ssn"];
		   $data3=$row1["salary"];
		    $data4=$row1["qualification"];
			$data5=$row1["batch"];
			$sql2="select * from people where '$data2'=ssn";
			$sql3="select * from fc_sub where '$data1'=fid";
			$res2=$conn->query($sql2);
			$res3=$conn->query($sql3);
			while($row2=$res2->fetch_assoc())
			{
				$data6=$row2["name"];
				$data7=$row2["password"];
				$data8=$row2["gender"];
				while($row3=$res3->fetch_assoc())
				{
					$data9=$row3["sub_id"];
					$sql4="select sub_name from subject where '$data9'=sub_id";
					$res4=$conn->query($sql4);
					while($row4=$res4->fetch_assoc())
					{
						$data10=$row4["sub_name"];
						echo "<tr><td>$data1</td><td>$data6</td><td>$data2</td><td>$data8</td><td>$data7</td><td>$data4</td><td>$data5</td><td>$data3</td><td>$data9</td><td>$data10</td></tr>";
					}
					
				}
					
			}		
	}
	echo"</table>";
}
else
{
   echo "<p align='center' style='font-size:20px;'>RECORD NOT FOUND</p>";	
}
?>