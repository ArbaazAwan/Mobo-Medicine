


<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">
	

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
\
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js"></script>



	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-dark">
		<h1 class="text-center text-white">Display Table</h1>
	</div>
		<table class="table table-striped table-bordered table-hover">
			<tr class="text-center">
				<th>ID</th>
				<th>Name</th>
				<th>PASSWORD</th>
				<th>UPDATE</th>
				<th>DELETE</th>

			</tr>

<?php
require_once('connect.php');

$q="select * from crudtable";
$query=mysqli_query($con,$q);
while($result=mysqli_fetch_array($query)){
?>

<tr class="text-center">
		        <td><?php echo $result['id'] ?></td>
				<td><?php echo $result['username'] ?></td>
				<td><?php echo $result['password'] ?></td>
				<td><button class="btn-primary btn"><a href="update.php?id=<?php echo $result['id'] ?>" class="text-white">UPDATE </a></button></td>
				<td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $result['id'] ?> " class="text-white">DELETE</a></button></td>

</tr>
<?php
}
?>
		</table>
	</div>
</div>

</div>


</body>
</html>