<?php

require("q1_con.php");
@$name=$password='';
@$name=$_POST['name'];
@$password=$_POST['password'];
$password=md5($password);
$sql="INSERT INTO `login`(`name`, `password`) VALUES ('$name','$password')";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "Sucess!";
}
else{
	echo "not connected";
}
	
?>


<html>
<form action="q1_md5.php"    method="post">
Username:
<input type="text" name="name"><br><br>
Password:
<input type="password" name="password"><br><br>
<input type="button" name="submit" value="Login">


</form>


</html>


















