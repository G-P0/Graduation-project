<?php 
	include_once 'database.php';

	class DataPreparation 
	{
		public $attributes = array();
		public $data = array();
		
		function __construct()
		{
			$this->PreparData();
		}

		public function PreparData()
		{
			$mysqli = Database::getInstance()->getConnection();
			foreach ($_POST as $key => $value) 
			{
				if ($key == 'submit' || $key == 'passwordConfirm' ) 
					continue;
				//string mysqli::real_escape_string ( string $escapestr )
				$this->attributes[] = $mysqli->real_escape_string($key);
				$this->data[] = $mysqli->real_escape_string($value);

			}
			$mysqli->close();
		}
	}

?>