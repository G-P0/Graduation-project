
<?php
	$plain_text= $_POST["msg"];
	$key = $_POST["key"];
	if (is_numeric($key)) 
	{
		$message = str_split($plain_text);
		foreach ($message as $value) 
		{
			if ($value >= 'a' && $value <= 'z') 
			{
				$new_value = (ord($value) + $key - 97) % 26 + 97 ;
				if ($new_value < ord('a')) {
					$new_value = $new_value + 26;
				}
				$cipher[] = chr($new_value); 
			}
			elseif ($value >= 'A' && $value <= 'Z') 
			{
				$new_value = (ord($value) + $key - 65) % 26 + 65 ;
				if ($new_value < ord('A')) {
					$new_value = $new_value + 26;
				}
				$cipher[] = chr($new_value);
			}

		}
		$cipher_text = implode($cipher);
		echo '<br><b>' . 'The Encrypted Message : ' . $cipher_text . '</b>';
		
	}
	else
	{
		echo   '<br>' .'The key should be a Number !';
	}
?>