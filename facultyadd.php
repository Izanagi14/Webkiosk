<?php
$username2="root";
$server2="localhost";
$dbname2="Project";
$conn2=new mysqli($server2,$username2,"",$dbname2);
if($conn2->connect_error)
{
 echo "fail connection";
}
$name1=$_POST["fname"];
$ssn1=$_POST["ssnf"];
$fid=$_POST["fid"];
$gen=$_POST["gender"];
$salary=$_POST["salary"];
$qualification=$_POST["quali"];
$batch=$_POST["batch"];
$pwd1=$_POST["password"];
$sub1=$_POST["sub_id1"];
$sub2=$_POST["sub_id2"];
$sub3=$_POST["sub_id3"];
$sub4=$_POST["sub_id4"];
$sub5=$_POST["sub_id5"];
$sql_query1="insert into people values('$ssn1','$gen','$name1','$pwd')";
$res=$conn2->query($sql_query1);
$sql_query2="insert into faculty values('$fid','$ssn1','$salary','$qualification','$batch')";
$sql_query3="insert into fc_sub values ('$sub1','$fid')";
$sql_query4="insert into fc_sub values ('$sub2','$fid')";
$sql_query5="insert into fc_sub values ('$sub3','$fid')";
$sql_query6="insert into fc_sub values ('$sub4','$fid')";
$sql_query7="insert into fc_sub values ('$sub5','$fid')";
if($conn2->query($sql_query2))
	if($conn2->query($sql_query3))
		if($conn2->query($sql_query4))
			if($conn2->query($sql_query5))
				if($conn2->query($sql_query6))
					if($conn2->query($sql_query7))
					{
						header("Location:faculty.html");
					}
?>