<?php


$name="welcome to all!";

echo "<b>length of string is: </b>".strlen($name)."<br><br>";

$str="Its a beautiful day";
echo "<b>breaking down into array:<br></b>";
print_r (explode(" ",$str));
?>
<br><br>
<?php
echo "<b>reverse the string:</b>".strrev($name)."<br><br>";

$line="HEYY!";
echo "<b>Lower case form:</b>".strtolower($line)."<br><br>";

echo "<b>Lower case form:</b>".strtoupper($str)."<br><br>";  

echo "<b>replace the substring with original string:</b>";
$replace="happy place";
$display= substr_replace($replace,"face",6,11);
echo $display;





?>


