<?
session_start();
error_reporting(~E_NOTICE);

if(!isset($value['id']))
{


 $num = $_GET['id'];
$link=mysql_connect('localhost','root','');
mysql_select_db('student',$link);

$result=mysql_query("select * from student'");
$row=mysql_fetch_array($result);


?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css" />
<title>ostuck</title>
<style type="text/css">

</style>
</head>

<body>

  <div id="main">
  	<h1></b><img src="ostuck.jpg" width="138" height="37"/></h1>
	<?

if($row['sign']==0)
{?>
<h4><a href="menu.html" style="text-decoration: none" class="y">
<font color="#500FF">Sign up to create a Page
</a>
|
<a href="login.html" style="text-decoration: none" class="y">
<font color="#500FF">Log in<br><br>
</a>
</h4>
<?}
else
{?>
<h4><a href="logout.php?id=<?echo $num;?>" class="y">

sign out </a>(signed in as <?echo "{$row['username']}";?>)<br></h4>
<?}}
else
{?>
<h4><a href="form.html" style="text-decoration: none" class="y">
Sign up
</a>
|
<a href="login.html" style="text-decoration: none">
<font color="#500FF">Log in<br>
</a>
</h4><?
}
?>
  	<div id="header">
	
    	
 
		<a href="homepage.php?id=<?echo $num;?>" class="y">Home</a>
        <a href="" class="y">About us</a>
        <a href="#">feedback</a> 
    <h6></h6>
	This is a
    </div>
</div>


	<br>
   <div id="logo">
   <img src="thumbs.jpg" width="159" height="140" style="padding-bottom: 50px;"><br><br>

</div>
	  
	   
	<div id="searchbox">
	   
	   <form action="result.php?id=<?echo $num;?>" method="POST">
	    <input type="text" size="32" name="searchkey" style="float: center;">
	<br><br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button type="submit"><img src="search.jpg" width="32" height="24"></button></center>
	</form>
	   
	
 </div>
  <br><br><br>
</div>


<!-- Please leave the link(s) in the footer, but please do modify it in any other way you please -->
        <div id="footer">web development by <a href="">Shivaram Gopalakrishnan</a> |<a href="http://afp.google.com/copyright?hl=en">Copyright © 2011</a></div>
</body>
</html>
