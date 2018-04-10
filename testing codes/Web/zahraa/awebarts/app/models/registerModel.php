<?php 
	
	include '../models/databasecon.php';
	class Register
	{
		private  $attributes = array();
		private  $data = array();
		private $dbObj;
		function __construct($attributes, $data)
		{
			$this->setData($attributes, $data);
			$this->insertData();
		}
		function setData($attributes, $data)
		{
			$this->attributes = $attributes;
			$this->data = $data ;
		}
		private function connectToDb()
		{
			$vars = "../includes/vars.php";
			$this->dbObj = new DatabaseCon($vars);
			return $this->dbObj->connect();
		}
		private function insertData()
		{			
			$con = $this->connectToDb();
			$tuples = implode($this->attributes, "`,`");
			$dataValues = implode($this->data, "','");
			//echo $tuples;
			//echo "<br>";
			//echo $dataValues;
			//echo "<br>";
			$query = "INSERT INTO `users` (`id`,`".$tuples."`) VALUES (NULL,'" .$dataValues. "')";
			//echo $query;
			$result = mysqli_query($con, $query);
			
			if ($result)
			{
				echo "Regestration Complete!";
			}
			else
			{
				throw new Exception("Invalid Registration. Please try again !");
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