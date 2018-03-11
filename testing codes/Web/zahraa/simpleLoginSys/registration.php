<?php
	require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<form method="post" action="">
		Username: <input type="text" name="username"><br><br>
		Password: <input type="password" name="password"><br><br>
		Email: <input type="text" name="email"><br><br>
		<input type="submit" name="submit" value="Register">	
	</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) 
	{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$query = "INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES (NULL, '$username', '$password', '$email')";
	mysqli_query($connect, $query);
	echo 'Registration Complete'; 

	} 
?> 