<?php
include 'connect.php';
if(isset($_POST['done'])){
	$id=$_GET['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$q="UPDATE crudtable SET id=$id , username='$username' , password='$password' WHERE id=$id";
	$query=mysqli_query($con,$q);
	header("location:display.php");
}




?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">
	

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js"></script>


	<title></title>


</head>
<body>
<div class="col-md-4 m-auto"> 
<form method="post">
	<br><br><div class="card">
		<div class="card-header bg-dark">
		<h2 class="text-white text-center"> Update Operation </h2>
		</div>
		<br>
		<label>UserName</label>
<input type="text" name="username" placeholder="username"  class="form-control"><br>
			<label>Password</label>
<input type="text" name="password" placeholder="Password " class="form-control"><br>
<button class="btn btn-success " type="submit" name="done">Submit</button>
	</div>
</form>
 </div>
</body>
</html>