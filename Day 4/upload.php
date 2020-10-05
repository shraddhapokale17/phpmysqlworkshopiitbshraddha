<?php
 
 if (isset($_POST['submit']))
 {
 
	echo @$name=$_FILES["file"]["name"];
    @$type=$_FILES["file"]["type"];
    echo $type."<br>";
    @$size=$_FILES["file"]["size"];
	echo"size of file is:".$size."<br>";
	echo @$tmp=$_FILES["file"]["tmp_name"];
	$store="uploaded/".$name;
	move_uploaded_file($tmp,$store);
 
	echo "<br>file $name uploaded successfully";

 }





?>