<?php 

	class dataInsertion
	{
		private $attributes = array();
		private $data = array();
		
		function __construct($attr,$val)
		{
			$this->setData($attr,$val);
			$this->insertData();
		}

		function setData($attr, $val)
		{
			$this->attributes = $attr;
			$this->data = $val;
		}

		public function insertData()
		{			
			$fields = implode($this->attributes, "`,`");
			$dataValues = implode($this->data, "','");
			$query = "INSERT INTO `users` (`user_id`,`".$fields."`) VALUES (NULL,'" .$dataValues. "')";
			//echo $query;
			//die();
			$result = Query::run($query);
			if ($result) {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['username'] = $this->username;
                header("Location: ../index.php");
                die();
            }
			else
			{
				//$_SESSION['errors']['register'] = 1;
				throw new Exception("Invalid Registration. Please try again !");
			}
			
		}
	}

?>