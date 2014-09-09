<html>
<title>likopedia</title>
<head>


</head>

<style type="text/css">
h1
{
position:absolute;
top:230px;
left:340px;
}
h2
{

width: 380px;
float: center;
}
h4
{
position:absolute;
top:5px;
right:10px;
}
body{
					background:white;
				font-family:'Lucida Grande',sans-serif;
				color:#777;
				margin:0px;
				padding:20px 0 0 0;
			}
			.content{
				background:white;
				
		
			}
		
		    a.button{
		        width:240px;
		        height:45px;
		        color: #ccc; 
		        background:transparent url(button.png) no-repeat center center;
		        float:left;
				padding-left:90px;
		        text-decoration:none;
		        line-height:45px;
		        font-weight:bold;
		        margin:10px 0px 0px 0px;
		        text-align:left;
		        clear:both;
		      }
		    a.button:hover{
		        color:#fff;
		        -moz-opacity:0.9;
		        opacity:0.9;
		      }
			.footer{
			  text-align:center;
			  }
			.ad{
				width:330px;
				margin:5px auto;
			}
</style>
<body>





<div class="content">

<h2>
<center>


			
				<a id="msgup" class="button"><font size="2">See Rcommendations</font></a>
				<br>
				hello <?php $name=$_GET['id'];
if (isset($_COOKIE["signed"]))
{
$name=$_COOKIE["signed"];
}
echo $name;?>
<br><br>
			<form action="result.php" method="POST">




<font face="tahoma" size="3"> </font><input type="text" name="searchkey"><br>

<input type="submit" value="SEARCH" >


</form>
		</div>
		<?php
		
		include("connection.php");
$username=$_COOKIE["signed"];
$prev1=2;
$prev2=2;
$result=mysql_query("select * from pages");
while($row=mysql_fetch_array($result))
{

$tag1=$row['tag1'];
$tag2=$row['tag2'];
if($tag1=='')
{
$tag1=0;
}
if($tag2=='')
{
$tag2=0;
}
$result1=mysql_query("select * from users where name like '$username'");
$row1=mysql_fetch_array($result1);
$usertags=$row1['tags'];

$number1=substr_count($usertags, $tag1); 

if($number1>$prev1)
{
$prev1=$number1;
$interest1=$tag1;

}

$number2=substr_count($usertags, $tag2); 
if($number2>$prev2)
{
$prev2=$number2;
$interest2=$tag2;
}

}


$userseen=$row1['seen'];
$result=mysql_query("select * from pages");
while($row=mysql_fetch_array($result))
{
$pagename=$row['name'];
$found = strpos($userseen, $pagename);

if((($row['tag1']==$interest1&&$row['tag2']==$interest2) || (($row['tag1']==$interest2&&$row['tag2']==$interest1)))&& ($found=== false))
{
$suggestion1=$row['name'];

}

if((($row['tag1']==$interest1||$row['tag2']==$interest2) || (($row['tag1']==$interest2||$row['tag2']==$interest1)))&& ($found=== false))
{

$suggestion2=$row['name'];
}
}
		

		if($suggestion2==''&&$suggestion1=='')
		{
		
		
		
		
		
		
		$msg="its from No recommendations generated!";
		
		
		
		
		
}
	
		else
		{   if($suggestion1=='')
			{
			
			$aaa= "target=".$suggestion2;
$tar=$suggestion2;
			}	
			else
			{
			$aaa= "target=".$suggestion1;
$tar=$suggestion1;
			}
			$aaa=str_replace(' ', '%20',$aaa);
				
				$msg="Your interests: ".$interest1." and ".$interest2."<br>Hence you might also like to check <a href=showinfo.php?".$aaa.">".$tar."</a>";
if($suggestion2==''&&$suggestion1=='')
{
$msg="no recommendations."; }
		}		
		
		
				
		?>




<script src="jquery-1.3.2.js" type="text/javascript"></script>
	<script src="jquery.bar.js" type="text/javascript"></script>
	
	<script>
		$("#msgup").bar({
			color 			 : 'white',
			background_color : 'black',
			removebutton     : false,
			message			 : '<font size="5" face="tahoma"><?php  echo $msg;?>  ',
			time			 : 4000
		});
		
		
		
		
	</script> 

<br>

</center><br><br>
</div>
<br><br><br>

<center>
<a href="about.html" style="text-decoration: none">
<p><font size="3" color="#500FF">About us</a>

|
<a href="developers.html" style="text-decoration: none">
<font  color="#500FF">Developers</a> 

|
<a href="credits.html" style="text-decoration: none">
<font  color="#500FF">Credits</p>

</a>
</center>
</h2>

</html>	
