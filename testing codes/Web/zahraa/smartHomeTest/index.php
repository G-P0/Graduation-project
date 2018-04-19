<?php 
	include_once 'models/queryExecution.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Home</title>
</head>
<body>
	<h1>Login</h1>
	<form action="controllers/C_loginAndRegister.php" method="post">
		<input type="text" name="username"><br><br>
		<input type="password" name="password"><br><br>
		<input type="submit" name="submit" value="login"><br><br>
	</form>
	<h1>Register</h1>
	<form action="controllers/C_loginAndRegister.php" method="post">
		<input type="text" name="username"><br><br>
		<input type="email" name="email"><br><br>
		<input type="password" name="password"><br><br>
		<input type="submit" name="submit" value="register">
	</form>
	<?php 
		/*$query = "SELECT * FROM `users` WHERE 1";
		$result = Query::run($query);
		print_r($result) ;
		echo "<br>";
		echo "<br>";
		echo $result->num_rows;*/
	?>
</body>
</html>