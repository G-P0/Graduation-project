<?php 
	class Database
	{
		private $host = 'localhost';
	 	private $user = 'root';
		private $pass = 'root';
		private $db = 'smart_home';
		private $connect;
		protected static $instance;

		/*
		Get an instance of the Database
		@return Instance
		*/
		public static function getInstance() 
		{
			if(!self::$instance) 
			{ 
				// If no instance then make one
				self::$instance = new self();
			}
			return self::$instance;
		}
		
		function __construct()
		{
			$this->connect = new mysqli($this->host, $this->user, $this->pass, 
				$this->db);
		}

		//get connection
		public function getConnection() 
		{
			return $this->connect;
		}
	}

?>