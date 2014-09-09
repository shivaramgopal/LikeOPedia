<html>
<head>
<style type="text/css">
body{
font-family:tahoma;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{

width:800px;
padding:0px;
align: left;
}
.line
{
width:800px;
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
color:blue;
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
<script type="text/javascript">
function validateForm()
{

if (document.forms["myForm"]["fname"].value==null || document.forms["myForm"]["fname"].value=="")
  {
  alert("Fullname must be filled out");
  return false;
  }
  if (document.forms["myForm"]["uname"].value==null || document.forms["myForm"]["uname"].value=="")
  {
 
  alert("Username must be filled out");
  return false;
  }
 
   if (document.forms["myForm"]["pswd"].value==null || document.forms["myForm"]["pswd"].value=="")
  {
  alert("enter some password!");
  return false;
  }
  if (document.forms["myForm"]["id"].value==null || document.forms["myForm"]["id"].value=="")
  {
  alert("enter a valid email!");
  return false;
  }
  
}
</script>
<script type="text/javascript">
function validateFormo()
{

if (document.forms["myForm1"]["fn"].value==null || document.forms["myForm1"]["fn"].value=="")
  {
  alert("Fullname must be filled out");
  return false;
  }
  if (document.forms["myForm1"]["un"].value==null || document.forms["myForm1"]["un"].value=="")
  {
  alert("Username must be filled out");
  return false;
  }
   if (document.forms["myForm1"]["pwd"].value==null || document.forms["myForm1"]["pwd"].value=="")
  {
  alert("enter some password!");
  return false;
  }
  if (document.forms["myForm1"]["id"].value==null || document.forms["myForm1"]["id"].value=="")
  {
  alert("enter a valid email!");
  return false;
  }
 
    if (document.forms["myForm1"]["pn"].value==null || document.forms["myForm1"]["pn"].value=="")
  {
  alert("Enter the page name , damn!");
  return false;
  }
    if (document.forms["myForm1"]["wk"].value==null || document.forms["myForm1"]["wk"].value=="")
  {
  alert("Enter some information about your stuff , damn!");
  return false;
  }
}
</script>
<link rel="stylesheet" type="text/css" href="style.css" />


</head>
<title>Search results</title>
  <div id="main">
  <h1><img src="ostuck.jpg" width="140" height="37"/></b></h1>
  		<div id="header">
	
    	
 
		Sign up and start rating stuff! 
    <h6></h6>
    </div><br><br>
<body>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js">
</script>
<div class="layer1">




<b><font color="white"><p class="heading">&#8226; I want to Sign up & create a page.<br></font>
 <span class="small"><font color="gray"></b>Click here to create a page for your product and like/dislike other pages.</font></span
 </p>

 
 
 
 
 
 <div class="content">
<div id="stylized" class="myform">
<form id="form" name="myForm1" action="upload.php" onsubmit="return validateFormo()" method="POST" enctype="multipart/form-data">
<h1>Sign-up</h1>
<hr>
<label>Full name
<span class="small">Add your full name</span>
</label>
<input type="text" name="fullname" id="fn"/>

<label>Username
<span class="small">Short username for your account</span>
</label>
<input type="text" name="username" id="un" />

<label>Password
<span class="small">Min. size 6 chars</span>
</label>
<input type="password" name="password" id="pwd" />

<label>Your Email-id
</label>
<input type="text"  name="email" id="id"/>
<label>Page name 
<span class="small">Apt. name for your page</span>
</label>
<input type="text" name="pagename" id="pn" />


<br>
<label>Information: 
<span class="small">enter full information about your page.</span>
</label>
<textarea rows="8" cols="40" name="wiki" id="wk"></textarea>

<label for="file">Image: </label>

<input type="file" name="file" id="file" />
<h3><input type="checkbox" value="y" name="page" id="p" checked>
I accept the terms & conditions. </h3>
<button type="submit" value="sign up">Sign up</button>
<div class="spacer"></div>

</form>
</div>

</div>

<p><br><br><br></p>
<b><font color="white"><p class="heading">&#8226; I want to Sign up as a user.<br></font>
<span class="small"><font color="gray"></b>click here to sign up as a user to like/dislike pages.</font></span>
</p>
<div class="content">
<div id="stylized" class="myform">

<!--<form id="form" name="myform" action="upload.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()"> -->
<form name="myForm" action="upload.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
<h1>Sign-up</h1>
<hr>
<label>Full name
<span class="small">Add your full name</span>
</label>
<input type="text" name="fullname" id="fname">

<label>Username
<span class="small">Short username for your account</span>
</label>
<input type="text" name="username" id="uname" />

<label>Password
<span class="small">Min. size 6 chars</span>
</label>
<input type="password" name="password" id="pswd" />

<label>Your Email-id
</label>
<input type="text"  name="email" id="id"/>
<label>&nbsp&nbsp&nbsp</label>
<h3><input type="checkbox" value="n" name="page" id="p" checked>
I accept the terms & conditions. </h3>

<button type="submit" value="sign up">Sign up</button>
<div class="spacer"></div>
</div></div>

<script type="text/javascript">
jQuery(document).ready(function() {
  jQuery(".content").hide();
  jQuery(".heading").click(function()
  {
    jQuery(this).next(".content").slideToggle(400);
  });
});
</script>

</html>
