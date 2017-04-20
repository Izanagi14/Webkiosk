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
$sem=$_POST["sem"];
$sql_query1="insert into people values('$ssn2','$gender','$name2','$pwd')";
$result=$conn->query($sql_query1);
$sql_query2="insert into student values ('$batch','$sid2','$sem','$ssn2')";
$sql_query3="insert into st_sub values ('$sub1','$sid2')";
$sql_query4="insert into st_sub values ('$sub2','$sid2')";
$sql_query5="insert into st_sub values ('$sub3','$sid2')";
$sql_query6="insert into st_sub values ('$sub4','$sid2')";
$sql_query7="insert into st_sub values ('$sub5','$sid2')";
if ($conn->query($sql_query2))
     if($conn->query($sql_query3)) 
        if($conn->query($sql_query4)) 
             if($conn->query($sql_query5)) 
                 if($conn->query($sql_query6)) 
                     if($conn->query($sql_query7)=== TRUE) 
                       {
                        header("Location:student.html");
                       }  
?>