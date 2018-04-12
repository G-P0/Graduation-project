<?php 
	include_once '../models/databasecon.php';
	
	class Login
	{
		private $username;
		private $password;
		private $dbObj;
		
		function __construct($username, $password)
		{
			$this->setData($username, $password);
			$this->authenticateUser();
		}
		private function setData($username, $password)
		{
			$this->username = $username;
			$this->password = $password;
		}
		private function connectToDb()
		{
			//include '../models/databasecon.php';
			$vars = "../includes/vars.php";
			$this->dbObj = new DatabaseCon($vars);
			return $this->dbObj->connect();
		}
		private function authenticateUser()
		{
			//$connect = mysqli_connect("localhost", "root", "", "awebarts");
			$con = $this->connectToDb();
			$query = "SELECT * FROM `users` WHERE `username` = '$this->username' AND `password` = '$this->password'";
			$result = mysqli_query($con, $query);
			$numrows = mysqli_num_rows($result);
			if ($numrows == 1)
			{
				return TRUE;	
			}
			else
			{
				throw new Exception("Invalid username or password. Please try again !");
			}
			$this->close($con);
		}
		private function close($con)
		{
			//mysqli_close();
			$this->dbObj->close($con);	
		}
	}

 ?>