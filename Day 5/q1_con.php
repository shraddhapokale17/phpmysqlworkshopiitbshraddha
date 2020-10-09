<?php


	


$conn=mysqli_connect('localhost','root','','data1');

if($conn)
	echo "connected successfully!";
else
	echo "not connected".mysqli_connect_error();


	

?>