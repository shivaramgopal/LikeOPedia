<?
$num = $_GET['id'];
$link=mysql_connect('localhost','root');
mysql_select_db('mydata',$link);

$result=mysql_query("select * from members where username like '$num'");
$row=mysql_fetch_array($result);
mysql_query("update members set sign=0 where username='$num'");
$num=NULL;
echo '<script type="text/javascript">

<!--
window.location = "homepage.php?id='.$num.'"
//-->
</script>';

?>
