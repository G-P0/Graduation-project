<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Registeration</title>
	<!-- Bootstrap core CSS --> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<h1>Sign Up!</h1>
		<form method="POST" action="../controllers/C_loginAndRegister.php">

			<input type="text" name = "name" placeholder="Your name" required>
			<br><br>
			<input type="text" name="username" placeholder="Username" required>
			<br>
			<?php 
				if (isset($_SESSION['errors'])) 
				{
					if ($_SESSION['errors']['username'] = 1) 
					{
						echo "Username cann't contain any spaces or special characters except _ <br><br>";
					}
					elseif ($_SESSION['errors']['username'] = 2) 
					{
						echo "This Username belongs to an existing account. Please try a different Username! <br>";
					}
				}
			?>
			<input type="text" name="email"  placeholder="E-mail" required>
			<br>
			<?php 
				if (isset($_SESSION['errors'])) 
				{
					if ($_SESSION['errors']['email'] = 1) 
					{
						echo "This Email belongs to an existing user. Please try a different Email or simply try to login! <br><br>";
					}
				}
			?>
			<input type="password" name="password" placeholder="Password" required>
			<br>
			<?php 
				if (isset($_SESSION['errors'])) 
				{
					if ($_SESSION['errors']['password'] = 1) 
					{
						echo "Password must contain at least 8 characters! <br>";
					}
					elseif ($_SESSION['errors']['password'] = 2) 
					{
						echo "Password must contain both letters and characters!<br>";
					}
				}
			?>
	      	<input type="password" name="passwordconfirm" placeholder="Confirm Password" required>
	      	<br>
	      	<?php 
				if (isset($_SESSION['errors'])) 
				{
					if ($_SESSION['errors']['password'] = 3) 
					{
						echo "Mismatch of password confirmation. Please enter the same password twice <br><br>";
					}
				}
			?>
			<input type="date" name="birthdate" placeholder="mm/dd/yyyy" required>
			<br><br>
			<input type="numbers" name="phone_no" placeholder="phone" required>
			<br><br>
			<input type="radio" id="customRadio1" name="gender" value="male" required>
			<label class="custom-control-label" for="customRadio1">Male</label>
			<input type="radio" id="customRadio2" name="gender" value="female" required>
			<label class="custom-control-label" for="customRadio2">Female</label> 
			<br><br>
			<input type="submit" name = "submit" value="register">			    
			</form>
</body>
</html>