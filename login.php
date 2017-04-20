<?php 
$username="root";
$server="localhost";
$dbname="Project";
$conn=new mysqli($server,$username,"",$dbname);
session_start();
if($conn->connect_error)
{
 echo "fail connection";
}
$uid=$_POST["userid"];
$pwd=$_POST["password"];
$set=$_POST["fm_subject"];
if(empty($uid) || empty($pwd) || empty($set))
{
	echo"<script> alert('INPUT REQUIRED')</script>";
    $_SESSION['keeper']=0;	
}
if(!preg_match("/^[1-9]*$/",$uid))
{
	$_SESSION['keeper']=0;
	echo "<script> alert('INVALID USER ID ')</script>";
}

$_SESSION['password']=$uid;
if($set==="STUDENT")
{
$sql_query="select name,sid from people natural join student where ssn='$uid' and password='$pwd'";
$result=$conn->query($sql_query);
if($result->num_rows>0)
  {
     while($row = $result->fetch_assoc()) 
    {
		$_SESSION['password']=1;
         $_SESSION['name']=$row["name"];
		 $_SESSION['sid']=$row["sid"];
    }
	header("Location:html5.php");
  }
else
	echo "<script type='text/javascript'>alert('WRONG PASSWORD OR USERNAME')</script>";
}
if($set==="ADMINISTRATOR")
{
	$sql_query1="select * from administrator where usid='$uid' and password='$pwd'";
	$result1=$conn->query($sql_query1);
	if($result1->num_rows>0)
	{	$_SESSION['password']=1;
		header("Location:newadmin.php");
	}
	else
	{
	  // echo "<script type='text/javascript'> alert('WRONG PASSWORD ENTERRED')</script>";
	   $_SESSION['password']=0;
	   header("Location: index.php");
	}
}
if($set==="FACULTY")
{
   $sql_query2="select name,fid from people natural join faculty where ssn='$uid' and password='$pwd'";
   $result2=$conn->query($sql_query2);
   if($result2->num_rows>0)
   {
	   $_SESSION['password']=1;
	   $_SESSION['password']=1;
	   while($row2=$result2->fetch_assoc())
	   {
	     $_SESSION['name']=$row2["name"];
		 $_SESSION['fid']=$row2["fid"];
	  }
	   header("Location:html6.php");
   }
  else 
   {
    echo "<script type='text/javascript'> alert('WRONG PASSWORD ENTERRED')</script>";
   }
}
?>