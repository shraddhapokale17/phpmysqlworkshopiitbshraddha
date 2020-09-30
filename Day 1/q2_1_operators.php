<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
	
	echo "<h3><b>option for arthmetic operations are:</b></h3><br>";
	echo "1.Addition<br>2.Substraction<br>3.Multiplication<br>4.Division<br><br>";
	
	
	$num1=5;
	$num2=2;
	$op=1;
	
	switch($op)
	{
	case 1:
	$num3=$num1+$num2;
	echo $num1."+".$num2 ."=" .$num3."<br>";
	echo "Addition of two number is".$num3;
	break;
	
	case 2:
	$num3=$num1-$num2;
	echo $num1."-".$num2 ."=" .$num3."<br>";
	echo "Substraction of two number is".$num3;
	break;
	
	case 3:
	$num3=$num1*$num2;
	echo $num1."*".$num2 ."=" .$num3."<br>";
	echo "Multiplication of two number is".$num3;
	break;
	
	case 4:
	$num3=$num1/$num2;
	echo $num1."/".$num2 ."=" .$num3."<br>";
	echo "division of two number is".$num3;
	break;
	
	defalut:
	echo "Have a good day:)";
	}
	


?>

</body>
</html>