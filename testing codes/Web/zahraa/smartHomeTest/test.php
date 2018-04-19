<?php 

$key = "user";//array("a", "b", "c", "d");
$value = "ali";//array("x", "y","z", "o");
$preparedData = array();
for ($i=0; $i <3 ; $i++) 
{ 
	$preparedData[$key] = $value;
}
echo "<pre>";
print_r($preparedData);
echo "<pre>";
//$this->preparedData[] = array($key => $value );
?>