<?php

$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,'mydbs');

if($connect){
	echo "connected";
}
else{
	echo "not connected";
}

?>