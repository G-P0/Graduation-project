<?php
$message = $_POST['msg'];
$key = $_POST['key'];
$message = str_replace (" ", "", $message);
$key = str_replace (" ", "", $key);
$message=str_pad($message, 64, '0', STR_PAD_RIGHT);
$key=str_pad($key, 64, '0', STR_PAD_RIGHT);

//needed functions

function myxor ($arr, $arr2) {
	
	for ($i=0; $i < count($arr); $i++) {
			if($arr[$i]==$arr2[$i])
				$xored_res[$i]=0;
			else{ 
				$xored_res[$i]=1;
			}
		}
	return $xored_res;
}

function shift ($arr, $shift) {
	
	if ($shift==1){
		$temp = $arr[0];
		for ($i=1; $i < count($arr); $i++)  
			$arr[i-1] = $arr[i];
		$arr[count($arr)-1] = $temp ;
	}

	elseif ($shift==2){
		$temp[] = $arr[0];
		$temp[] = $arr[1];
		for ($i=2; $i < count($arr); $i++)  
			$arr[i-2] = $arr[i];
		$arr[count($arr)-2] = temp[0];
		$arr[count($arr)-1] = temp[1];

	 //print_r($shifted);
	return $shifted;
}