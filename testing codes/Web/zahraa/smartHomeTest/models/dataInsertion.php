<?php 

	class dataInsertion
	{
		private $attributes = array();
		private $data = array();
		
		function __construct()
		{
			$this->insertData();
		}
		public static function insertData()
		{			
			$tuples = implode($this->attributes, "`,`");
			$dataValues = implode($this->data, "','");
			$query = "INSERT INTO `users` (`id`,`".$tuples."`) VALUES (NULL,'" .$dataValues. "')";
			$result = Query::run($query);
			if ($result)
			{
				echo "Regestration Complete!";
			}
			else
			{
				$_SESSION['errors']['register'] = 1;
				//throw new Exception("Invalid Registration. Please try again !");
			}
			
		}
	}

?>