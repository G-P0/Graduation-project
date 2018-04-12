<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	        <title>awebarts</title>
	        <link rel="stylesheet" href="resources/css/bootstrap.css">
	        <link rel="stylesheet" href="resources/css/bootstrap.min.css">
	        <link rel="stylesheet" href="resources/css/mystyle.css">
	        <script src="resources/js/bootstrap.js"></script>
	        <script src="resources/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="content logcon">
				<div class="register">
					<form method="post" action="controllers/loginController.php">
						<h1>Sign up</h1>
						<input class="input-lg" type="text" name="name" placeholder="Enter Your Name" required>
						<input class="input-lg" type="text" name="username" placeholder="Enter Your Username" required>
						<input class="input-lg" type="email" name="email" placeholder="Enter Your Email" required>
						<input class="input-lg" type="password" name="password" placeholder="Enter Your Password" required>
						<input class="btn-primary btn-lg" type="submit" name="submit" value="Register">
					</form>
				</div>
				<div class="login">
					<form method="post" action="controllers/loginController.php">
						<h1>Login</h1>
						<input class="input-lg" type="text" name="username" placeholder="Enter Your Username" required>
						<input class="input-lg" type="password" name="password" placeholder="Enter Your Password" required>
						<input class="btn-primary btn-lg" type="submit" name="submit" value="Login">
					</form>
				</div>
			</div>
		</div>
		<div class="clear"></div>
        <footer>
            <p>Copy Right Reserved &copy; Zahraa Saied 2017</p>
        </footer>
        </div>
	</body>
</html>