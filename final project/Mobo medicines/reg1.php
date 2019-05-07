<!DOCTYPE html>
<html>
<head>
	<title> Register </title>
	<link rel="stylesheet" href="login.css" type="text/css">
	<link rel="stylesheet" href="about.css" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style type="text/css">
	#sub{
		width: 60px;
		height: 25px;
		padding: 5px;
		background-color: green;
		color:#3498db;

	}
	input{
		border-radius: 10px;
		padding: 5px;

	}
	body{
	background-image: url("signupbackground.jpg");
	background-repeat: no-repeat;
	background-size: 100%;
}
</style>
</head>
<body>
<nav class="navbar">
<span class="open">
<a href="#" onclick="openslide()">
<svg width="30" height="30">
<path d="M0,5 30,5" stroke="#12908E" stroke-width="5"/>
<path d="M0,14 30,14" stroke="#12908E" stroke-width="5"/>
<path d="M0,23 30,23" stroke="#12908E" stroke-width="5"/></svg>
</a>
</span></nav>
<div id="sidebar" class="side">
<a href="#" class="close" onclick="closeslide()">&times;</a>
<a href="hh1.php">HOME</a>
<a href="about1.html">ABOUT</a>
<a href="contact.html">CONTACT US</a>
<a href="login.html">LOGIN/SIGNUP</a>
</div><center>
<div id="main">
<h1 style="font-size:75px; font-family:Sans-serif; color:black"> Register with us</h1></center>
<div class="haha">
<div id="div">
	<form action="reg.php" method="GET" style="text-align: center;">
	<label style="color:black"> UserName</label><br/>
	<input  type="text" placeholder="Enter User Name" name="uname" required /><br/>
	<br/>

	<label style="color:black"> E-mail</label><br/>
	<input  type="email" placeholder="Enter E-mail" name="email" required/><br/>
	<br/>
	<label style="color:black"> Phone Number</label><br/>
	<input  type="text" placeholder="Enter Phone Number" name="ph" required/><br/>
	<br/>
	<label style="color:black"> Address</label><br/>
	<textarea name= "address" rows="4" cols="160" style="border-radius: 10px; padding: 0 auto; width: 500px;" required></textarea><br/>
	<br/>
	<label style="color:black"> Password</label><br/>
	<input  id ="p1" type="text" placeholder="Enter Password" name="pwd" required/><br/>
	<br/>
	
	<label style="color:black"> Confirm Password</label><br/>
	<input id ="p2" type="text" placeholder="Confirm Password" name="cpwd" required/><br/>
	<br/>
	
	<button id="sub" type="submit">Submit</button>
	
	
	<div id="div" style="background-color:#f1f1f1">
	<a href="hh1.php" style="text-decoration:none;" >
		<button type="button" class="cancelbtn"style="background-color:#ff6b6b">Cancel</button></a> 
</div>
</div></div>
</form>


<script>
function openslide(){
document.getElementById("sidebar").style.width="250px";
document.getElementById("main").style.marginLeft="250px";
}

function closeslide(){
document.getElementById('sidebar').style.width='0';
document.getElementById('main').style.marginLeft='0';
}
</script>







</body>
</html>
