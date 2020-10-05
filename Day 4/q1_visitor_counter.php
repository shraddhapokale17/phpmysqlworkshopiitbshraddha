<?php
	$file=file_get_contents("count.txt");
	
	$visitors=$file;
	
	$newvisitor=$visitors+1;
	$filenew=fopen("count.txt","w");
	fwrite($filenew,$newvisitor);
	echo "you've had $newvisitor visitors.";



?>