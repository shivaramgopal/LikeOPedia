<?
session_start();
error_reporting(~E_NOTICE);

if(!isset($value['id']))
{


 $num = $_GET['id'];
$link=mysql_connect('mysql15.000webhost.com','a4520539_ostuck','vish116');
mysql_select_db('a4520539_ostuck',$link);

$result=mysql_query("select * from members where username ='$num'");
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
        <a href="" class="y"><font color="#c8c8c8">About us</a>
        <a href="#">feedback</a> 
    
    </div>
<font color="#b0b0b0" size="2" style="text-align: center;"> <br><br><b> <li><u>Review Portal:</u><br>Likopedia is a user based review portal.We wish to help you gather reviews about anything in quick fashion. We are non-profit organization, willing to run this website without any intended Copyright infringement or violations of cyber laws and rules.<br><br><li><u>Sources: </u><br> Information on many of the product/service/company/person's page is taken from wikipedia and other sources. The images are either uploaded by users or are beign taken from google images.<br><br>
<li><u>Privacy on Sign up Information:</u><br>
We assure you that your information is with us, safe in our databases, in encrypted form. This information, under any circumstances, will not be made availbale to any other profit/non-profit organisation. Also your privacy is intact even after you sign in on the website, as we are not keeping track of events you are attempting while on the site.
<br><br>Simple moto of this website is to provide knowledge about all possible things in a easier way, from users - to users.
<br>Come here, search, show thumbs up/thumbs down, write a short review and enjoy!<br> </b> </font>
</div>


	<br>
   
	  
	
 </div>
  <br><br><br>
</div>


<!-- Please leave the link(s) in the footer, but please do modify it in any other way you please -->
        <div id="footer">web development by <a href="">Vishal Kokate</a> |<a href="http://afp.google.com/copyright?hl=en">Copyright © 2011</a></div>
</body>
</html>
