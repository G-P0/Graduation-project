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



<?php 
	if (! isset($_SESSION['user'])) 
	{
		header("Location: views/signup.php");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Home</title>
</head>
<body>
	<p><?php
			echo "welcome".$_SESSION['user'];
	   ?>	
	</p>

</body>
</html>