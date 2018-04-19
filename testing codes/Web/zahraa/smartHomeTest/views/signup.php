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

			<input type="text" name = "name" placeholder="First name">
			<input type="text" name="username" placeholder="User Name">
			<input type="text" name="email"  placeholder="E-mail">
			<input type="password" name="password">
	      	<input type="password" name="passwordconfirm" placeholder="Password">
			<input type="date" name="birthdate" placeholder="mm/dd/yyyy">
			<input type="numbers" name="phone_no" placeholder="phone">
			<input type="radio" id="customRadio1" name="gender">
			<label class="custom-control-label" for="customRadio1">Male</label>
			<input type="radio" id="customRadio2" name="gender">
			<label class="custom-control-label" for="customRadio2">Female</label>
			<input type="submit" name = "submit" value="register">			    
			</form>
</body>
</html>