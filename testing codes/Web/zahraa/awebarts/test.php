<?php 
	$s = "zahraa_Cv1";

	if (preg_match('[\W]', $s))
	{
    	echo "error"; 
	}
   	else
    {
    	echo "true";	
    }


 	//if (preg_match('/[A-Za-z]/', $s) && preg_match('/[0-9]/', $s))
	//echo 'Contains at least one letter and one number'; }

 ?>