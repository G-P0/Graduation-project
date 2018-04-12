<?php 
	include_once 'databaseConnect.php';
	
	class Login  extends DatabaseConnect
	{
		private $username;
		private $password;
		
		function __construct($username, $password)
		{
			$this->connectToDb();
			$this->setData($username, $password);
			$this->authenticateUser();
			$this->dbObj->close($this->dbLink);
		}

		private function setData($username, $password)
		{
			$this->username = mysqli_real_escape_string($this->dbLink,$username);
			$this->password = mysqli_real_escape_string($this->dbLink,$password);
		}

		private function authenticateUser()
		{
			$query = "SELECT * FROM `users` WHERE `username` = '$this->username' AND `password` = '$this->password'";
			$result = mysqli_query($this->dbLink, $query);
			$numrows = mysqli_num_rows($result);
			if ($numrows == 1)
			{
				return TRUE;	
			}
			else
			{
				throw new Exception("Invalid username or password. Please try again !");
			}
		}
	}

 ?>