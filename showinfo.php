<?php error_reporting(~E_NOTICE);

error_reporting(~E_NOTICE);
$id = $_GET['id'];
$ip= $_SERVER['REMOTE_ADDR'];
$num = $_GET['target'];
$link=mysql_connect('localhost','root');
mysql_select_db('mydata',$link);
$result=mysql_query("select * from pageinfo where name like '$num'");
$row=mysql_fetch_array($result);
$result1=mysql_query("select * from members where username like '$id'");
$row1=mysql_fetch_array($result1);
$likedby=$row['likedby'];
$dislikedby=$row['dislikedby'];
$pgname=$row['name'];
?>




<html >
<head>

<link rel="stylesheet" type="text/css" href="style.css" />
<title><?echo $num;?></title>
<style type="text/css">

</style>

</head>

<body>

  <div id="main">
  	<h1><img src="ostuck.jpg" width="140" height="37" title="oStuck"/></b></h1>
	<?
if($row1['sign']==0)
{?>
<h4><a href="menu.html" style="text-decoration: none" title="create your page">
Sign up to create a Page
</a>
|
<a href="Login.html" style="text-decoration: none" title="log in and check your pages statistics">
Log in<br><br>
</a>
</h4>
<?}
else
{?>
<h4><a href="logout.php?id=<?echo $id;?>">

<font color="6666ff">sign out (signed in as <?echo "{$row1['username']}";?>)<br>
</a></h4>
<?}?>
	
	
	<div id="header">
	
    	
    <form action="result.php?id=<?echo $id;?>" method="POST">
		<a href="homepage.php?id=<?echo $id;?>">Home</a>
        <a href="" title="get to know about us!">About us</a>
        <a href="#">feedback</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp 
	<input type="text" name="searchkey" title="search pages">
	<button type="submit"><img src="search.jpg" width="23" height="15"></button>(search pages)
	</form>
    <h6></h6>
    </div>
	
	<div id="contentColumn">
		
  <!-- This is an entry, copy and paste it to create a new one -->      
 
    
<?
$name=ucwords($row['name']);
?>
<div id="pagename"><?echo "<b><font color='#500fff' size='6' style='font family:tahoma'>".$name;?></div>
<table>
<td rowspan="2"><div id="image"><a href="<?echo "{$row['image']}";?>">
&nbsp <img src="<?echo "{$row['image']}";?>" width="320" height="285">  
</a> </font></div></td>
<td>

<?
if($id==null)
{?>
<br></center>
<map name="planetmap">
  <area shape="circle" coords="88,57,29" href="like.php?target=<?echo "{$row['name']}";?>&id=<?echo $id;?>" alt="click to like like" title="like this stuff"/>
<area shape="circle" coords="93,124,32" href="dislike.php?target=<?echo "{$row['name']}";?>&id=<?echo $id;?>" title="dislike this stuff"/>

</map>
<div id="thumbs">
  <?
echo "<font color=6666ff>{$row['likes']}"."<font color=6666ff> Likes</font>";
?>
<img src="thumbs.jpg" width="180" height="180" alt="like/dislike" usemap="#planetmap">
<?
echo "<font color=6666ff>{$row['dislikes']}"."<font color=6666ff> Dslikes </font>";}




/*----------------------------*/
else
if(strchr($likedby,$id))
{?>
<div id="notify"><b>&nbsp&nbsp You have liked this page!</b></div>

<div id="thumbs">

<?
echo "<br><br><font style='font family:tahoma' color=6666ff>{$row['likes']}"."<font color=6666ff> <b>Likes</b></font><br><br>";
?>
<a href="unlike.php?target=<?echo "{$row['name']}";?>&id=<?echo $id;?>" style="text-decoration: none" title="unlike if you no more like this page">
<b><font size='4'><img src="unlike.jpg" width="80" height="35"></font></b>
</a><br><br>
<?
echo "<font color=6666ff>{$row['dislikes']}"."<font color=6666ff><b> Dislikes</b></font><br><br>";
?>
</div>
<?}
else if(strchr($dislikedby,$id))
{?>
<div id="notify"><b>&nbsp&nbsp You have disliked this page!</b></div>

<div id="thumbs">

<?
echo "<br><br><font style='font family:tahoma' color=6666ff>{$row['likes']}"."<font color=6666ff> <b>Likes</b></font><br>";
?>
<br><a href="undislike.php?target=<?echo "{$row['name']}";?>&id=<?echo $id;?>" style="text-decoration: none">
<b><font size='4'><img src="undislike.jpg" width="80" height="35"></font></b>
</a>
<br><br>
<?
echo "<font color=6666ff>{$row['dislikes']}"."<font color=6666ff><b> Dislikes</b></font><br><br>";
?>
</div>

<?
}
else {?>
<br></center>
<map name="planetmap">
  <area shape="circle" coords="88,57,29" href="like.php?target=<?echo "{$row['name']}";?>&id=<?echo $id;?>" alt="click to like like" title="like this stuff"/>
<area shape="circle" coords="93,124,32" href="dislike.php?target=<?echo "{$row['name']}";?>&id=<?echo $id;?>" title="dislike this stuff"/>

</map>
<div id="thumbs">
  <?
echo "<font color=6666ff>{$row['likes']}"."<font color=6666ff> Likes</font>";
?>
<img src="thumbs.jpg" width="180" height="180" alt="like/dislike" usemap="#planetmap">
<?
echo "<font color=6666ff>{$row['dislikes']}"."<font color=6666ff> Dslikes </font>";}?>
</div>

</td></table>
<table cellpadding="10" width="800">
<td >
<font  style="font-family:tahoma">
<span class="small"><?
echo "<b><font size='2' color='white' style='font family:tahoma'>{$row['wiki']}";
?></span></td> </tr> </table> 
        
  </div>
	
	</div>

         <div id="footer">web development by <a href="">Dedications</a> |<a href="http://afp.google.com/copyright?hl=en">Copyright © 2011</a></div>
</body>
</html>
