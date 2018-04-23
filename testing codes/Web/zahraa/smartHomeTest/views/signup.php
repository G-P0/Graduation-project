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
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
</head>
<body>
	<div class="col-6" style="max-width: 55%; margin: auto;" >
		<div class="formhead" style="border-bottom: 1px solid #DDD; margin-bottom: 20px">
			<h1>Sign Up!</h1>
			<h5>Create Your home account</h5>
		</div>
		<div class="formbody">
				<form method="POST" action="../controllers/C_loginAndRegister.php">
					<!-- Name -->
					<div class="form-group">
						<label for="inputName">Name</label>
						<input type="text" class="form-control" placeholder="Enter your first and last name" name="name" required>
				  	</div>
				  	<!-- Username -->
				  	<div class="form-group">
				  		<label for="inputUserName">Username</label>
				  		<input type="text" class="form-control" placeholder="Enter your username" name="username" required>
				  		<?php 
							if (isset($_SESSION['errors'])) 
							{
								if ($_SESSION['errors']['username'] = 1) 
								{
									echo "<strong>Username cann't contain any spaces or special characters except _ </strong><br>";
								}
								elseif ($_SESSION['errors']['username'] = 2) 
								{
									echo "<strong>This Username belongs to an existing account. Please try a different Username!</strong><br>";
								}
							}
						?>
				  	</div>
				  	<!-- E-mail -->
				  	<div class="form-group">
				  		<label for="inputEmail">E-mail</label>
				  		<input type="text" class="form-control" placeholder="Enter your E-mail" name="email" required>
				  		<?php 
							if (isset($_SESSION['errors'])) 
							{
								if ($_SESSION['errors']['email'] = 1) 
								{
									echo "<strong>This Email belongs to an existing user. Please try a different Email or simply try to login!</strong><br>";
								}
							}
						?>
				  	</div>
				  	<!-- Password and Confirmation -->
				  	<div class="form-row">
						    <div class="col">
					          	<label for="inputPassword">Create your password</label>
	      						<input type="password" class="form-control" id="inputPassword" placeholder="Password" aria-describedby="passwordHelpBlock" name="password" required>
	      						<small id="passwordHelpBlock" class="form-text text-muted">
								  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
								</small>
								<?php 
									if (isset($_SESSION['errors'])) 
									{
										if ($_SESSION['errors']['password'] = 1) 
										{
											echo "<strong>Password must contain at least 8 characters!</strong><br>";
										}
										elseif ($_SESSION['errors']['password'] = 2) 
										{
											echo "<strong>Password must contain both letters and characters!</strong><br>";
										}
									}
								?>
						    </div>
						    <div class="col">
						    	<label for="inputConfirmation">Confirm your password</label>
	      						<input type="password" class="form-control" id="inputConfirmation" placeholder="Password" name="passwordconfirm" required>
	      						<?php 
									if (isset($_SESSION['errors'])) 
									{
										if ($_SESSION['errors']['password'] = 3) 
										{
											echo "<strong>Mismatch of password confirmation. Please enter the same password twice </strong><br><br>";
										}
									}
								?>
						    </div>
				    </div>
				    <!-- Birthdate and PhoneNo -->
				    <div class="form-row" style="margin-top: 20px">
				    	<div class="col">
						  		<label for="inputBirthdate">Birthdate</label>
						  		<input type="date" class="form-control" placeholder="mm/dd/yyyy" name="birthdate" required>
				    	</div>
				    	<div class="col">
						  		<label for="inputPhoneNo">Phone No.</label>
						  		<input type="numbers" class="form-control" placeholder="phone" name="phone_no" required>
				    	</div>
				    </div>	
				    <!-- Gender  -->
				    <div class="form-group" style="margin-top: 20px; margin-bottom:0">
				    	<label for="inputGender">Choose Gender</label>
					    <div class="custom-control custom-radio" style="margin: 5px 0">
						  <input type="radio" id="customRadio1" class="custom-control-input" name="gender" value="male" required>
						  <label class="custom-control-label" for="customRadio1">Male</label>
						</div>
						<div class="custom-control custom-radio">
						  <input type="radio" id="customRadio2" class="custom-control-input" name="gender" value = "female" required>
						  <label class="custom-control-label" for="customRadio2">Female</label>
						</div>
					</div>
			    	<!--File and Register-->
			    	<div class="custom-file">
					  
					</div>
					<div class="form-group">
						<div class="form-row">
						    <div class="col-6" class="custom-file">
					          	<input type="file" class="custom-file-input" id="customFile">
					  			<label class="custom-file-label" for="customFile">Choose file</label>
						    </div>
						    <div class="col-6" style="text-align: right;">
						      	<button class="btn btn-primary btn-lg" name="submit" value="register">Register</button>
						    </div>
					  	</div>
				  	</div>
				    	
			</form>
		</div>
	</div>
</body>
</html>