<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css" />
<title>like</title>
<style type="text/css">

body{
font-family:tahoma;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:22px;
}
.line
{
margin:0 auto;
width:400px;
padding:18px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized h3
{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}

#stylized textarea{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>


</head><hr>
<style type="text/css">

</style>


</head>
<body onLoad="setTimeout('delayer()', 5000)">
<?
error_reporting(~E_NOTICE);

$id = $_GET['id'];

$num = $_GET['target'];
if($id=="")
{?>
<div id="main">
  	<h1><img src="ostuck.jpg" width="140" height="37" title="oStuck"/></b></h1>
	<br>
	<div id="header">
	
    	
    <form action="result.php?id=<?echo $id;?>" method="POST">
		<a align="center">Sign in to like/dislike! </a>
    <h6></h6>
    </div><br>
	<div id="stylized" class="myform">
<b>you haven't logged in yet.If you want to like/dislike a page you need to <a href="login.html">sign in!</a></div>
</b><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="spacer"></div>
<div id="footer">web development by <a href="">Dedications</a> |<a href="http://afp.google.com/copyright?hl=en">Copyright © 2011</a></div>
<?}
else
{$link=mysql_connect('localhost','root');
mysql_select_db('mydata',$link);
$result=mysql_query("select * from pageinfo where name like '$num'");
$row=mysql_fetch_array($result);
$result1=mysql_query("select * from members where username like '$id'");
$row1=mysql_fetch_array($result1);
if($row1['sign']==1)
{
mysql_query("update pageinfo set likes=likes+1 where name like '$num'");
$first=$row['likedby'];
$new=$first." ".$id;
mysql_query("update pageinfo set likedby='$new' where name='$num'");
?><?
echo '<script type="text/javascript">

<!--
window.location = "showinfo.php?target='.$num.'&id='.$id.'"
//-->
</script>';
}
else
{?>
<div id="main">
  	<h1><img src="ostuck.jpg" width="140" height="37" title="oStuck"/></b></h1>
	<br>
	<div id="header">
	
    	
    <form action="result.php?id=<?echo $id;?>" method="POST">
		<a align="center">Sign in to like/dislike! </a>
    <h6></h6>
    </div><br>
	<div id="stylized" class="myform">
<b>you haven't logged in yet.If you want to like/dislike a page you need to <a href="login.html">sign in!</a></b>
<div id="spacer"></div>
<div id="footer">web development by <a href="">Dedications</a> |<a href="http://afp.google.com/copyright?hl=en">Copyright © 2011</a></div>
<?
}

}

?>
