<?php 
	include_once 'database.php';

	class DatabaseConnect 
	{
		protected $dbObj;
		protected $dbLink;
	
		function connectToDb()
		{
			$vars = "../includes/vars.php";
			$this->dbObj = new Database($vars);
			$this->dbLink = $this->dbObj->connect();
		}
	}

?>