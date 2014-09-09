<?
error_reporting(~E_NOTICE);
$pname = $_POST['pagename'];
$wiki = $_POST['wiki'];
$page=$_POST['page'];
$fname=$_POST['fullname'];
$uname=$_POST['username'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$link=mysql_connect('localhost','root');
$con=mt_rand();
mysql_select_db('mydata',$link);
$result=mysql_query("select * from members where username='$uname'");
$result1=mysql_query("select * from members where email='$email'");
if($row=mysql_fetch_array($result))
{
echo "your username ". $uname. " isn't unique, it already exists in our database.";?> <a href="menu.html">Try another username." </a>
<?}
else if($row1=mysql_fetch_array($result1))
{
echo "The email-id provided by you is already associated with this site.";
}
else
{
mysql_query("insert into members values('$fname','$pwd','$uname','$email',0,0,'$con')");
if($page=="y")
{
{
if ($_FILES['file']["error"] > 0)
{
	echo "Error: " . $_FILES["file"]["error"] . "<br />";
}
else
{
	/*supposing u want 2upload only image files....*/
	$filetype = $_FILES["file"]["type"];
	// echo $filetype;     
	$ext=substr($filetype." ",0,6);	//The added space is just to use the substr function efficiently
	if($ext=="image/")
	{
		/*we can upload the file*/
		
		$target = "uploads/"; //here target is the path to the folder where you want to upload the file
 		$target = $target.basename( $_FILES['file']['name']) ; 
 		/*If the destination filename already exists, it will be overwritten.
		Now, to avoid this v hv many options.....i ll tell u abt these on monday
		*/
		
		if(move_uploaded_file($_FILES['file']['tmp_name'], $target)) 
		{
			
		
 		}
 		else
 		{
 			echo "Sorry, there was a problem uploading your file.";
 		}

		
		/*If you r dealing only with images....u should check this out 
		http://php.net/manual/en/function.getimagesize.php */
		
	}
}
}

//$link=mysql_connect('localhost','578950_vish','11061989');
//mysql_select_db('opsoc_zzl_page',$link);



}

$link=mysql_connect('localhost','root');
mysql_select_db('mydata',$link);
$pname = $_POST['pagename'];
$wiki = $_POST['wiki'];
$uname=$_POST['username'];
mysql_query("insert into pageinfo values('$pname',0,0,'','','$wiki','$target','$uname')");


echo '<script type="text/javascript">

<!--
window.location = "show.php?target='.$uname.'&p='.$page.'"
//-->
</script>';
}
?>
