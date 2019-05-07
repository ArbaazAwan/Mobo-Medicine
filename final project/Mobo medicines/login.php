
<!DOCTYPE html>
<html>
<head>
<title> Login In</title>
	<link rel="stylesheet" href="login.css" type="text/css">

<link rel="stylesheet" href="about.css" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
	*{
		color:black;
	}
body{font-size:25px;
	background-image: url("loginbackground.jpg");
	background-repeat: no-repeat;
	background-size: 100%;
}
input{
		border-radius: 10px;
		padding: 5px;

	}
.cancelbtn{
	margin-top:30px;
	height:40px;
	width:100px;font-size:25px;
	
}
#log{
	margin-top:30px;
	height:40px;
	width:200px;font-size:25px;
	border-radius: 10px;
	background-color:#48dbfb;
}
#input{
	width:300px;
	height:40px;
	border-radius:10px;
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
<a href="hh1.html">HOME</a>
<a href="about1.html">ABOUT</a>
<a href="contact.html">CONTACT US</a>
<a href="login.html">LOGIN/SIGNUP</a>
</div>
<div id="main">
<h1>LOGIN</h1>

<div class="haha">
<div id="div" >
	<form action="login1.php" method="GET">
	<label> UserName</label><br/>
	<input id="input" type="text" placeholder="Enter User Name" name="uname" required /><br/>
	<br/>

	<label> E-mail</label><br/>
	<input  id="input"type="email" placeholder="Enter E-mail" name="email" required/><br/>
	<br/>
	<label> Password</label><br/>
	<input id="input"type="password" placeholder="Enter Password" name="pw" required/><br/>
	<br/>
	<button id="log" type="submit" >Login in</button>
	<input  type="checkbox" checked="checked"> Remember me </div>
	
	<div id="div">
	<a href="hh1.php" style="text-decoration:none;" ><button type="button" class="cancelbtn"style="background-color:#ff6b6b;border-radius: 10px">Cancel</button></a>
	<span class="pws" style="padding-left:150px"><a href="names.html">Forgot password?</a></span>
	<label style="padding-left:50px;"><a href = "reg1.php">Sign Up</a></label>
</div></form>
</div>
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
