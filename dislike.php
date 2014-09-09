<?
error_reporting(~E_NOTICE);
$id = $_GET['id'];
$ip=$_SERVER['REMOTE_ADDR'];
$num = $_GET['target'];


$link=mysql_connect('localhost','root');
mysql_select_db('mydata',$link);
if($id==null||$id==404)
{
echo "you haven't logged in yet.<br> Ifyou want to like/dislike a page you need to";?> <a href="login.html">sign in!</a>
<?}
else
{
$result=mysql_query("select * from pageinfo where name like '$num'");
$row=mysql_fetch_array($result);
$result1=mysql_query("select * from members where username like '$id'");
$row1=mysql_fetch_array($result1);
if($row1['sign']==1)
{mysql_query("update pageinfo set dislikes=dislikes+1 where name like '$num'");
$first=$row['dislikedby'];
$new=$first." ".$id;
mysql_query("update pageinfo set dislikedby='$new' where name='$num'");
echo '<script type="text/javascript">

<!--
window.location = "showinfo.php?target='.$num.'&id='.$id.'"
//-->
</script>';
}
else
{
echo "you haven't logged in yet.<br> Ifyou want to like/dislike a page you need to";?> <a href="login.html">sign in!</a>
<?
}
}
?>
