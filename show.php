
<head>

<link rel="stylesheet" type="text/css" href="style.css" />
<title>Search results</title>
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
</head>
<?
$target=$_GET['target'];
$link=mysql_connect('localhost','root');
mysql_select_db('mydata',$link);
$result=mysql_query("select * from members where username='$target'");
$row=mysql_fetch_array($result);
$fname=$row['fullname'];
$uname=$row['username'];
$pwd='Password has been sent to your email id!';
$email=$row['email'];
if($_GET['p']=='y')
{
$result1=mysql_query("select * from pageinfo where owner like '$target'");
$row1=mysql_fetch_array($result1);
$pname=$row1['name'];
$wiki=$row1['wiki'];
$target=$row1['image'];
}
?>

<div id="main">
  	<h1></b><img src="ostuck.jpg" width="138" height="37"/></h1>
	<br>
	<div id="header">
	
    	
 
		<a href="homepage.php?id=<?echo $num;?>">Home</a>
        <a href="">About us</a>
        <a href="#">feedback</a> 
    <h6></h6>
    </div><br><br>
	
<div id="stylized" class="myform">
<form id="form" name="form" action="upload.php" method="POST" enctype="multipart/form-data">
<h1>Information you entered:</h1>
<hr>
<label>Full name
<span class="small">your full name</span>
</label><h3><?echo $fname;?></h3>


<label>Username
<span class="small">username for your account</span>
</label><h3><?echo $uname;?></h3>


<label>Password
<span class="small">Remember</span>
</label><h3><?echo $pwd;?></h3>


<label>Your Email-id
</label><h3><?echo $email;?></h3>
<? if($_GET['p']=='n')
{?>
<div class="spacer"></div>
</div>
<?}?>
<? if($_GET['p']=='y')
{?>
<label>Page name 
<span class="small"></span>
</label><h3><?echo $pname;?></h3>




<label>Information: 
<span class="small">information about your page.</span>
</label><h3><?echo $wiki;?></h3>



<label for="file">Image for your page </label>
<h3>&nbsp&nbsp&nbsp&nbsp<img src="<?echo $target;?>" height="120" width="165"></h3>

<div class="spacer"></div>
</div>
<div id="stylized" class="myform">
<b>A confirmation email has been sent to your provided email-id. Check your mails and activate your account!
</div>


<?}?>

<br>

<div id="stylized" class="myform">
<a href="showinfo.php?target=<?echo $pname;?>"><b>&bull; Click here to visit your page!</a>
</div>
</div>
