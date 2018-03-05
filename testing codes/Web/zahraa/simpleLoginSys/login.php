<?php
	session_start();
	require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post" action="">
		Username: <input type="text" name="username"><br><br>
		Password: <input type="password" name="password"><br><br>
		<input type="submit" name="login" value="Login">	
	</form>

</body>
</html>
<?php
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM `users` WHERE `username` LIKE '$username' AND `password` LIKE '$password' ";
	$result = mysqli_query($connect, $query);
	$numrows = mysqli_num_rows($result);
	if ($numrows == 1) {
		$_SESSION['username']=$username;
		echo 'hello'. ' '. $username;
	}
	else
	{
		echo 'login failed';
	}

}


?>