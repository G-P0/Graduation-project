<?php 
	include_once 'queryExecution.php';
	session_start();

	class DataValidation
	{
		public $attributes = array();
		public $data = array();
		//public $preparedData = array();

		function __construct()
		{
			$this->PreparData();
		}

		function PreparData()
		{
			$mysqli = Database::getInstance()->getConnection();
			foreach ($_POST as $key => $value) 
			{
				if ($key == 'submit' || $key == 'passwordConfirm' ) 
					continue;

				if ($key == 'name') 
				{
					$value = filter_var($value, FILTER_SANITIZE_STRING);
				}
				elseif ($key == 'username') 
				{
					$value = filter_var($value, FILTER_SANITIZE_STRING);
					$this->validateUsername($value);
				}
				elseif ($key == 'password') 
				{
					$this->validatePassword($value);
				}
				elseif ($key == 'email') 
				{
					$value = filter_var($value, FILTER_SANITIZE_EMAIL);
					$this->validateEmail($value);
				}
				elseif ($key == 'phone') 
				{
					$value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
				}
				$this->attributes[] = $mysqli->real_escape_string($key);
				$this->data[] = $mysqli->real_escape_string($value);
				//$key = $mysqli->real_escape_string($key);
				//$value = $mysqli->real_escape_string($value);
				//$this->preparedData[$key] = $value;
			}
			Query::closeConnection();
		}

		/////////////validateUsername///////////
		function validateUsername($username)
		{
			if (preg_match('[\W]', $username))
			{
	    		$_SESSION['errors']['username'] = 1;
	    		//"Username cann't contain any spaces or special characters except _ ";  
			}

			$query = "SELECT * FROM `users` WHERE `username` = '$username'";
			$result = Query::run($query);
			$numrows = $result->num_rows;
			if ($numrows > 0)
			{
				$_SESSION['errors']['username'] = 2; 
                //"This Username belongs to an existing account. Please try a different Username!";	
			}
		}
		////////////////ValidatePassword//////////////////
		function ValidatePassword($pass)
		{
			if (strlen($pass) < 8) 
			{
				$_SESSION['errors']['password'] = 1;
				//"Password must contain at least 8 characters!";
			}

			if (! preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $pass))
			{
	    		$_SESSION['errors']['password'] = 2;
	    		//"Password must contain letters and characters!";
			}
		}
		///////////////////validateEmail//////////////////////
		function validateEmail($email)
		{
			$query = "SELECT * FROM `email` WHERE `email` = '$email'";
			$result = Query::run($query);
			$numrows = $result->num_rows;
			if ($numrows > 0)
			{
				$_SESSION['errors']['email'] = 1; 
                //"This Email belongs to an existing user. Please try a different Email or simply try to login!";
			}
		}
	}
?>