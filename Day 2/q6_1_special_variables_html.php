<?php

$side1=30;
$side2=30;
$side3=30;

if($side1==$side2 && $side2==$side3)
{
	echo "Given triangle is Equilateral triangle.";
}
elseif ($side1==$side2  || $side2==$side3 || $side1==$side3  )
{
	echo "Given triangle is Isosceles triangle.";
}
else{
echo "Given triangle is Scalene triangle.";
}




?>

