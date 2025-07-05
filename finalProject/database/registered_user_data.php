<?php



$con=mysqli_connect("localhost","root","","registered_user");
if(!$con){
	die("error detected" .mysqli_error($con));
}

?>