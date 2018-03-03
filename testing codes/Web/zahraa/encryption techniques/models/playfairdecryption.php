<?php
	$plain_text = $_POST['msg'];
	$key = $_POST['key'];
	$plain_text = strtolower($plain_text);
	$key = strtolower($key);
	//prepare key
	$filtered_key[] = NULL;
	$decryption_matrix[] = NULL;
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
			$decryption_matrix[$i][$j] = $filtered_key[$index++];	
		}	
	}
	

	//prepare plain text
	$msg = str_split($plain_text , 2);
	
	//start decryption
include_once 'methods.php';
foreach ($msg as $val) 
{
    $indexs = get_indexs($val, $decryption_matrix);

// if they were in row
    if ($indexs[0][0] == $indexs[1][0]) 
    {
        $indexs[0][1]--;
        $indexs[1][1]--;
        if ($indexs[0][1]>4)
            $indexs[0][1]-=5;
        if ($indexs[1][1]>4)
            $indexs[1][1]-=5;
        if ($indexs[0][0]<0)
            $indexs[0][0]+=5;
        if ($indexs[1][0]<0)
            $indexs[1][0]+=5;

    } //if they were in the same col
    elseif ($indexs[0][1] == $indexs[1][1]) 
    {
        $indexs[0][0]--;
        $indexs[1][0]--;
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
     $decrypted_msg[] = $decryption_matrix[$indexs[0][0]][$indexs[0][1]] . $decryption_matrix[$indexs[1][0]][$indexs[1][1]];
}
   $dec_msg= implode($decrypted_msg);
   echo "<br><b> Decrypted Message : " . $dec_msg . "</b>"; 

?>