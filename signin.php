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
				<br><br><br>
				<form action="signin.php" method="POST">




<font face="tahoma" size="3">Username: </font><input type="text" name="username"><br>
<font face="tahoma" size="3">Passowrd: </font><input type="password" name="pwd"><br>
<input type="submit" value="Sign in" >


</form>
		</div>
		<?php

		if($show>=3)	
		{
		$recom=$print;
		
		$result1=mysql_query("select * from pageinfo where seen like 0 and region like '%$print%' ORDER by name ASC");
		$row1=mysql_fetch_array($result1);
		$tar=$row1['name'];

		$aaa= "target=".$tar;
				$aaa=str_replace(' ', '%20',$aaa);
				
				$msg="You might also like to check <a href=showinfo.php?".$aaa.">".$tar."</a>";
if($tar=='')
{
$msg="no recommendations."; }
		}		
		else
		{
		$msg="No recommendations generated!";
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
