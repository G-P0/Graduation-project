<?php 
	include 'databaseConnect.php';

	class Validation extends DatabaseConnect
	{
		function __construct()
		{
			
		}
	
		function validateUsername($username)
		{
			if (preg_match('[\W]', $username))
			{
	    		$_SESSION['errors']['username'] = 1;
	    		//"Username cann't contain any spaces or special characters except _ ";  
			}

			$this->connectToDb();
			$query = "SELECT `username` FROM `users`";
			$result = mysqli_query($this->dbLink, $query);
			$users = array();
			while($record = mysqli_fetch_assoc($result))
			{
				$users[] = $record;
			}
			foreach ($users as $key => $value) 
			{
				if (in_array($username, $value))
				{
					$_SESSION['errors']['usernameDuplicate'] = 1; 
                    //"This Username belongs to an existing account. Please try a different Username!";
				}
			}
			$this->dbObj->close($this->dbLink);
		}

		function ValidatePassword($pass)
		{
			if (strlen($pass) < 8) 
			{
				$_SESSION['errors']['passwordlength'] = 1;
				// "Password must contain at least 8 characters!";
			}

			if (! preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $pass))
			{
	    		$_SESSION['errors']['passwordcontents']= 1;
	    		//"Password must contain letters and characters!";
	    		
			}

		}
		function validateEmail($email)
		{
			$this->connectToDb();
			$query = "SELECT `email` FROM `users`";
			$result = mysqli_query($this->dbLink, $query);
			$emails = array();
			while($record = mysqli_fetch_assoc($result))
			{
				$emails[] = $record;
			}
			foreach ($emails as $key => $value) 
			{
				if (in_array($email, $value))
				{
					$_SESSION['errors']['emailDuplicate'] = 1; 
                    //"This Email belongs to an existing user. Please try a different Email or simply try to login!";
				}
			}
			$this->dbObj->close($this->dbLink);
		}
	}
?>