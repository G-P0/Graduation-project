<?php 
	include_once 'queryExecution.php';

	class Login 
	{
		private $data;
		private $password;
		
		function __construct()
		{
			$this->getData();
			$this->authenticateUser();
		}

		private function getData()
		{
			$mysqli = Database::getInstance()->getConnection();
			$this->data = $mysqli->real_escape_string($_POST['username']);
			$this->password = $mysqli->real_escape_string($_POST['password']);
		}

		private function authenticateUser()
		{
			$query = "SELECT * FROM `users` WHERE `username` = '$this->data' AND `password` = '$this->password'";
			$result  = Query::run($query);
			$numrows = $result->num_rows;
			if ($numrows == 1)
			{
				session_start();
				$_SESSION['username'] = $this->data;
				echo "welcome".$this->data;	
			}
			else
			{
				$_SESSION['errors']['login_err'] = 1;
				//"Invalid username or password. Please try again !";
			}
		}
	}

 ?>