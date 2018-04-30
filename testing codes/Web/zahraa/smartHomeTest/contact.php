<?php 

	// Check if the user input(message) came from a request(Form)

	if ($_SERVER['REQUEST_METHOD']=='POST') { 

		$user =filter_var( $_POST['username'], FILTER_SANITIZE_STRING ); 
		$mail =filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL );	
		$mob  =filter_var( $_POST['mobile'], FILTER_SANITIZE_NUMBER_INT );	
		$msg  =filter_var( $_POST['message'], FILTER_SANITIZE_STRING );

		if($_SERVER[re])

		// Creating an empty indexed array of errors  
		// or Creating a unique variable for each error
		$userErr = $emailErr = $mobErr = $msgErr = '';

		if (strlen($user)< 8) {
			$userErr= 'User name must be at least <strong>8</strong> Characters';
		}

		/*if (is_numeric($mob < 11)){
			$mobErr ='Mobile number must be 11 digits';
		}*/

		if (strlen($msg)< 20) {
			$msgErr= 'User Message must contain at least <strong>120</strong>  Charachters';
		
		}
		
	} /*else {
		echo "You are not allowed to access this info";
	}
	*/


	/* PHP Mail Function 

		If There are no Errors (Error array or Error variables are empty), send the mail. 
		Syntax :
				mail(To, Subject, Message, Headers, Paramters)

	*/ 
				

				$formErrors = array('userErr' , 'emailErr' , 'mobErr' , 'msgErr');

		if (empty($formErrors)) {

			mail('medoashiry@gmail.com', 'Contact Form', $msg , $mail);

			//after sending the e-mail, we need to flush the Form from data besides printing a success process.
			$user ="";
			$mail ="";
			$mob ="";
			$msg ="";

			$success =  '<div class="alert alert-success">Your Message has been sent successfully  </div>';

		}
	
 ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	 	<title>Contact Us</title>
		<link rel="stylesheet"  href="resources/css/bootstrap.min.css">
		<link rel="stylesheet"  href="resources/css/font-awesome.min.css">
		<link rel="stylesheet"  href="resources/css/contact.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">

		<script src="resources/js/jquery-3.3.1.min"></script>
		<script src="resources/js/bootstrap.min"></script>

		<style>
@import url('https://fonts.googleapis.com/css?family=Playfair+Display|Teko');
</style>

	</head>
	<body>

		<div class="container">

				<!-- Start Form -->
				<h1 class="text-center">Contact Us</h1>

				<form class="contact-form" method="POST" action=" <?php echo $_SERVER['PHP_SELF']; ?>">


					<!-- Username -->
					<input class="form-control" type="text" name="username" placeholder="Type your username" 
					value="<?php if (isset($user)) {echo $user;} ?>" >

					<i class="fa fa-user fa-fw"></i>
					
					<?php if (!empty($userErr)) { 
							
						echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert"> ';

						  echo '<strong>Oh, Come on. </strong> '; 
						  echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'; 
					      echo ' <span aria-hidden="true">&times;</span>';
						  echo '</button>';

						  echo $userErr; 

						echo ' </div> ';
					}
					?>

					<!-- E-mail -->
					<input  class="form-control" type="email" name="email" placeholder="Please enter a valid E-mail" value="<?php if (isset($mail)) {echo $mail;} ?>">
					<i class="fa fa-envelope fa-fw"></i>
					<?php if (!empty($emailErr)) {
						echo $emailErr;	
					} ?>

					<!-- MobileNo -->
					<input  class="form-control" type="text" name="mobile" placeholder="Type your phone number"
					value="<?php if (isset($mob)) {echo $mob;} ?>" >
					<i class="fa fa-phone fa-fw"></i>
					<?php
						 if (!empty($mobErr)) {

							echo $mobErr;	
					}
						
					 ?>	

					 <!-- Message -->
					<textarea class="form-control" name="message" placeholder="Your Message! "></textarea>


					<?php if (!empty($msgErr)) { 
							
						echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert"> ';

						  echo '<strong>You gotta be kidding me , </strong> '; 
						  echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'; 
					      echo ' <span aria-hidden="true">&times;</span>';
						  echo '</button>';

						  echo $msgErr; 

						echo ' </div> ';
					}
					?>


					<?php 

						if (isset($success)) {
							echo $success;
						}

					 ?>

					<!--Submit Button -->
					<input class="btn btn-success" type="submit" value="Send Message">
					<i class="fa fa-send fa-fw send-icon"></i>

					

				</form>
			<!-- End Form -->

		</div>
<?php include_once "views/html_footer.php" ?>


	</body>
</html>