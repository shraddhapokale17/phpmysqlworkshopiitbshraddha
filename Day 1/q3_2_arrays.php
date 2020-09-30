<?php
 
 $a=array(array(3,2),array(10,5));
 $b=array(array(8,7),array(3,0));
 
 echo "<b>Addition of Two matrices is:</b><br><br>";
 
	for($i=0;$i<2;$i++)
 {
	for($j=0;$j<2;$j++)
	{
		echo $a[$i][$j]+$b[$i][$j]." ";
	}
	echo "<br>";
 }


?>