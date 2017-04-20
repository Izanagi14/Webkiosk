<!DOCTYPE html>
<html>
<head>
<title>FACULTY </title>
<style type="text/css">
header, section, footer, aside, nav, article, figure, figcaption 
{
display: block;
}
body 
{
color: #666666;
background-color: #f9f8f6;
background-image: url("\one.jpg");
background-position: center;
font-family: Georgia, times, serif;
line-height: 1.4em;
margin: 0px;
}


h1 
{
background-image: url("\two.jpg");
text-indent: -9999px;
width: 940px;
height: 130px;
margin: 0px;
}
nav
 {
clear: both;
color: #ffffff;
background-color: #aeaca8;
height: 30px;
}
nav ul 
{
margin: 0px;
padding: 5px 0px 5px 30px;
}
nav li
 {
display: inline;
margin-right: 40px;
}
nav li a
{
color: #ffffff;
}
nav li a:hover, nav li a.current 
{
color: #000000;
}
section.courses 
{
float: left;
width: 659px;
border-right: 1px solid #eeeeee;
}
article 
{
position:relative;	
clear: both;
overflow: auto;
width: 100%;
}
hgroup
 {
margin-top:40px;
}
figure
 {
float: left;
width: 290px;
height: 220px;
padding: 5px;
margin: 20px;
border: 1px solid #eeeeee;
}
figcaption
 {
font-size: 90%;
text-align: left;
}
aside
 {
width: 230px;
float: left;
padding: 0px 0px 0px 20px;
}
aside section a
 {
display: block;
padding: 10px;
border-bottom: 1px solid #eeeeee;
}
aside section a:hover
 {
color: #985d6a;
background-color: #efefef;
}
a
 {
color: #985d6a;
text-decoration: none;
}
h1, h2, h3 
{
color:#0099ff;
font-weight: normal;
}
h2 
{
   margin: 10px 0px 5px 0px;
    padding: 0px;
}
h3 
{
margin: 0px 0px 10px 0px;
color: #de6581;
}
aside h2 
{
padding: 30px 0px 10px 0px;
color: #de6581;
}
footer
 {
	 position:absolute;
	 bottom:38px;
	 width:935px;
font-size: 100%;
clear: both;
color: #ffffff;
background-color: #aeaca8;
height: 40px;
}
h4
{
position:absolute;
left:30%;
top:5%;
font-size:25px;
color:red;
}
fieldset
{
height:900px;
width:940px;
margin: 20px auto 20px auto;
border: 2px solid #000000;
background-color: #ffffff;
}
</style>
<body>
<fieldset>
<header>
<h1>STUDNET</h1>
<h4>JAYPEE INSTITUE OF INFORMATION TECHNOLOGY</h4>
<nav>
<ul>
<li><a href="html6.php" class="current" >HOME</a></li>
<li><a href="third.php" target="go">PERSONAL INFO</a></li>
<li><a href="fourth.php" target="go">ACADEMIC INFO</a></li>
<li><a href="seven.php">LOGOUT</a></li>

</ul>
</nav>
</header>
<aside>
<section class="viewer">
<h2>OPTIONS</h2>
<a href="fifth.php" target="go">UPDATE ATTENDANCE</a>
<a href="sixth.php" target="go">VIEW STUDNETS</a>
<a href="eight.php"target="go">ADD MARKS</a>
<a href="ninth.php"target="go">UPDATE MARKS</a>
</section>
</aside>
<section class="courses">
<h2><p align ="center" action="nameret.php">WELCOME</p></h2>
<?php 
session_start();
$data=strtoupper($_SESSION['name']);
//$data2=$_SESSION['fid'];
//echo "<h5>$data</h5>";
echo"<h2><p align ='center' >$data</p></h2>";
?>
</section>
<iframe name="go" style="width:940px"; height="480px" src="" frameborder="0"></iframe>


<footer id="demo" align="center">
<script>

document.getElementById("demo").innerHTML = Date("");

</script>
&copy; webkiosk
</footer>


</fieldset>
</body>
</html>