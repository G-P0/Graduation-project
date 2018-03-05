<?php
	$plain_text = $_POST['msg'];
	$key = $_POST['key'];
	$plain_text = strtolower($plain_text);
	$key = strtolower($key);
	//prepare key
	$filtered_key[] = NULL;
	$encryption_matrix[] = NULL;
	$alphabet = 'abcdefghijklmnopqrstuvwxyz';
	$new_key = $key . $alphabet ;
	$new_key = str_replace('j', 'i', $new_key);
	$splited_key =  str_split($new_key);
	
	//key filtration
	foreach ($splited_key as $value) 
	{
		if (!in_array($value, $filtered_key)) 
		{
			$filtered_key[] = $value; 
		}
	}
	
	$filtered_key = implode($filtered_key);
	

	//build 5*5 matrix
	$index = 0;
	for ($i=0; $i<5; $i++) 
	{
		for ($j=0; $j<5; $j++) 
		{ 
			$encryption_matrix[$i][$j] = $filtered_key[$index++];	
		}	
	}
	

	//prepare plain text
	$msg = str_split($plain_text);
	$text[] = $msg[0];
	for ($i=1; $i <count($msg) ; $i++) 
	{
		if ($msg[$i] == $msg[$i - 1] && count($text) % 2 ) 
		{
			$text[] = 'x';
			$text[] = $msg[$i];
			continue;
		}
		$text[] = $msg[$i];
	}
	if (count($text) % 2) 
	{
		$text[] = 'x';

	}
	$new_text = implode($text);
	$prepared_text = str_split($new_text, 2);
	//print_r($prepared_text) ;

	//start encryption
include_once 'methods.php';

foreach ($prepared_text as $val) 
{
    $indexs = get_indexs($val, $encryption_matrix);

// if they were in row
    if ($indexs[0][0] == $indexs[1][0]) 
    {
        $indexs[0][1]++;
        $indexs[1][1]++;
        if ($indexs[0][1] > 4)
            $indexs[0][1] -= 5;
        if ($indexs[1][1] > 4)
            $indexs[1][1] -= 5;
        if ($indexs[0][0] < 0)
            $indexs[0][0] += 5;
        if ($indexs[1][0] < 0)
            $indexs[1][0] += 5;

    } //if they were in the same col
    elseif ($indexs[0][1] == $indexs[1][1]) 
    {
        $indexs[0][0]++;
        $indexs[1][0]++;
        if ($indexs[0][0] > 4)
            $indexs[0][0] -= 5;
        if ($indexs[1][0] > 4)
            $indexs[1][0] -= 5;
        if ($indexs[0][0] < 0)
            $indexs[0][0] += 5;
        if ($indexs[1][0] < 0)
            $indexs[1][0] += 5;
    } //others (Not in the same col & Not in the same row)
    else 
    {
        $temp = $indexs[0][1];
        $indexs[0][1] = $indexs[1][1];
        $indexs[1][1] = $temp;
    }
     $encryptedMsg[] = $encryption_matrix[$indexs[0][0]][$indexs[0][1]] . $encryption_matrix[$indexs[1][0]][$indexs[1][1]];
}
   $cipher= implode($encryptedMsg);
   echo "<br><b> Cipher Text :" . $cipher . "</b>"; 
?>