
<?php 
	//UPDATE `users` SET `name` = 'zahrraaaaa' WHERE `users`.`user_id` = 10;

class DataUpdate
{
	
		private $attributes = array();
		private $data = array();
		private $table ;
		
		function __construct($attr, $val, $tbl)
		{
			$this->setData($attr, $val, $tbl);
			$this->updateData();
		}

		function setData($attr, $val, $tbl)
		{
			$this->attributes = $attr;
			$this->data = $val;
			$this->table = $tbl;
		}

		public function updateData()
		{			
			$fields = implode($this->attributes, "`,`");
			$dataValues = implode($this->data, "','");
			//UPDATE `users` SET `name` = 'zahrraaaaa' WHERE `users`.`user_id` = 10;
			foreach ($variable as $field => $value) 
			{
				$query = "UPDATE `$this->table` SET `$field` = `$value`";
				$result = Query::run($query);
			}

			if ($result)
			{
				
			}
			else
			{
				//$_SESSION['errors']['update'] = 1;
				throw new Exception("Invalid Update. Please try again !");
			}
		}
}
?>