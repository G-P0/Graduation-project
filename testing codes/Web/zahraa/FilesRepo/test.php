<?php 
	$x = 'blabmnhanv.exe';
	$y = strpos($x, '.');
	echo $y;
	echo "<hr>";
	$z = substr($x, 0 , $y);
	echo $z;
	echo "<hr>";
	$w = substr($x, $y);
	echo $w;
	echo "<hr>";

 ?>