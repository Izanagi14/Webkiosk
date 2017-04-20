<?php
$username="root";
$server="localhost";
$dbname="Project";
$conn=new mysqli($server,$username,"",$dbname);
if($conn->connect_error)
{
 echo "fail connection";
}
$name2=$_POST["sname"];
$ssn2=$_POST["ssns"];
$sid2=$_POST["sid"];
$gender=$_POST["gender"];

$pwd=$_POST["password"];
$sub1=$_POST["sub_id1"];
$sub2=$_POST["sub_id2"];
$sub3=$_POST["sub_id3"];
$sub4=$_POST["sub_id4"];
$sub5=$_POST["sub_id5"];
$batch=$_POST["batch"];
//echo "$name2";echo "$ssn2";echo "$sid2";echo "$gender";echo "$pwd";echo "$sub1";echo "$sub2";echo "$sub3";echo "$sub4";echo "$sub5";
$sql_query1="insert into people values('$ssn2','$gender','$name2','$pwd')";
$result=$conn->query($sql_query1);
$sql_query2="insert into student values ('$ssn2','$batch','$sid','$sub_id')";
$result2=$conn->query(sql_query2);
?>