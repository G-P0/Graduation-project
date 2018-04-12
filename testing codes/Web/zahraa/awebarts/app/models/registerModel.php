<?php 
	
	include_once 'databaseConnect.php';
	
	class Register extends DatabaseConnect
	{
		private $attributes = array();
		private $data = array();

		function __construct()
		{
			$this->connectToDb();
			$this->PreparData();
			$this->insertData();
			$this->dbObj->close($this->dbLink);
		}

		function PreparData()
		{
			include 'dataValidation.php';
			foreach ($_POST as $key => $value) 
			{
				if ($key == 'submit') 
					continue;
				$this->attributes[] = mysqli_real_escape_string($this->dbLink,$key);
				$this->data[] = mysqli_real_escape_string($this->dbLink,$value);
			}
		}

		private function insertData()
		{			
			$tuples = implode($this->attributes, "`,`");
			$dataValues = implode($this->data, "','");
			//echo $tuples;
			//echo "<br>";
			//echo $dataValues;
			//echo "<br>";
			$query = "INSERT INTO `users` (`id`,`".$tuples."`) VALUES (NULL,'" .$dataValues. "')";
			//echo $query;
			$result = mysqli_query($this->dbLink, $query);
			if ($result)
			{
				echo "Regestration Complete!";
			}
			else
			{
				throw new Exception("Invalid Registration. Please try again !");
			}
		}
	}
 ?>