<?php
$username="root";
$server="localhost";
$dbname="Project";
$conn=new mysqli($server,$username,"",$dbname);
if($conn->connect_error)
{
 echo "fail connection";
}
$subid=$_POST["subid"];
$exam=$_POST["exam"];
$sem=$_POST["sem"];
$na=$_POST["name"];
$marks23=0;
session_start();
$databatch=$_SESSION['batch'];
$sql2="select sid from student where batch='$databatch'";
$result=$conn->query($sql2);
$i=0;
if($result->num_rows>0)
{
	while($row2=$result->fetch_assoc())
	{
		$daata=$row2["sid"];
        if($exam=="t1")
          {
			  $ss="select * from marks where sub_id='$subid' and sid='$daata'";
			  $r=$conn->query($ss);
			   if($r->num_rows>0)
			  {
				  if($na[$i]!="")
				  {
				  $qq="update marks set t1='$na[$i]' where sub_id='$subid' and sid='$daata' ";
				  $conn->query($qq);
				  }
			  }
			  else
			  {
	         $sql="insert into marks values('$na[$i]','$marks23','$marks23','$subid','$daata','$sem')";
	         $res=$conn->query($sql);
			  }
		  }
        if($exam=="t2")
          {
			  $ss="select * from marks where sub_id='$subid' and sid='$daata'";
			  $r=$conn->query($ss);
			   if($r->num_rows>0)
			  {
				   if($na[$i]!="")
				  {
				  $qq="update marks set t2='$na[$i]' where sub_id='$subid' and sid='$daata' ";
				  $conn->query($qq);
				  }
			  }
			  else
			  {
	          $sql="insert into marks values('$marks23','$na[$i]','$marks23','$subid','$daata','$sem')";
	          $res=$conn->query($sql);
			  }
		}
		  
        if($exam=="t3")
         {
			 $ss="select * from marks where sub_id='$subid' and sid='$daata'";
			  $r=$conn->query($ss);
			   if($r->num_rows>0)
			  {
				   if($na[$i]!="")
				  {
				  $qq="update marks set t3='$na[$i]' where sub_id='$subid' and sid='$daata' ";
				  $conn->query($qq);
				  }
			  }
else{
	 $sql="insert into marks values('$marks23','$marks23','$na[$i]','$subid','$daata','$sem')"; 
	           $res=$conn->query($sql);
}     
	 }
		 $i++;
     }
	 echo "<div align='center'><h3 style='color:green;'>MARKS UPDATED</h3></div>";
}
?>