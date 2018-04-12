<?php 
	class Database
	{
		private $host ;
		private $user;
		private $pass;
		private $db;
		
		function __construct($filename)
		{
			if (is_file($filename)) 
			{
			 	include $filename;
			}
			else 
			{
				throw new Exception("Error");
			} 
			$this->host = $host;
			$this->user = $user;
			$this->pass = $pass;
			$this->db = $db;
		}

		function connect()
		{
			$connect = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
			if (! $connect) 
			{
			 	throw new Exception("Database connection failed");
			}
			return $connect;
		}

		function close($connect)
		{
			mysqli_close($connect);
		}
	}

 ?>