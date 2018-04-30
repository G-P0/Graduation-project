<?php 
	include_once 'queryExecution.php';

	class Login 
	{
		private $user;
		private $password;
		
		function __construct()
		{
			$this->getData();
			$this->authenticateUser();
			Query::closeConnection();
		}

		private function getData()
		{
			$mysqli = Database::getInstance()->getConnection();
			$this->user = $mysqli->real_escape_string($_POST['username']);
			$this->password = $mysqli->real_escape_string($_POST['password']);
		}

		private function authenticateUser()
		{
			if (filter_var($this->user, FILTER_VALIDATE_EMAIL)) 
			{
				$query = "SELECT * FROM `users` WHERE `email` = '$this->user' AND `password` = '$this->password'";
			}
			else
			{
				$query = "SELECT * FROM `users` WHERE `username` = '$this->user' AND `password` = '$this->password'";
			}
			
			$result  = Query::run($query);
			$numrows = $result->num_rows;
			if ($numrows == 1)
			{
				session_start();
				$_SESSION['username'] = $this->user;
				header("Location: ../index.php");
				die();
			}
			else
			{
				//$_SESSION['errors']['login_err'] = 1;
				throw new Exception("Invalid Login, wrong password or email");
			}
		}
	}

 ?>