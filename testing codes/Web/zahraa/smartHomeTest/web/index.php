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