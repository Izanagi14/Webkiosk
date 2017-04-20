<?php
$username="root";
$server="localhost";
$dbname="Project";
$conn=new mysqli($server,$username,"",$dbname);
if($conn->connect_error)
{
 echo "fail connection";
}
echo"<form action='viewst.php' method='post'>";
echo "<div align='center'><pre><h2 style='color:#009033;'>STUDENT ID: <input type='text' name='stuid' style='width:200px;height:40px;border-radius:8px;font-size:20px;'>  <input type='submit' value='submit' style='border-radius:5px;background:lightblue; font-size:20px; width:100px; height:40px;'></pre></div>";
?>