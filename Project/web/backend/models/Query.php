<?php
	include_once 'database.php';
	class Query extends Database 
	{
		public static $link;
		public static function run($sql) 
		{
			self::$link = parent::getInstance()->getConnection();
			$result = self::$link->query($sql);
			if (self::$link->error) 
			{
				throw new Exception(self::$link->error);
			}
			return $result;
		}

		public static function closeConnection() 
		{
			if (self::$link) 
			{
				self::$link->close();
				parent::$instance = NULL;
			}
		}
	}

	//$result = Query::run($query);
	//Query::closeConnection();
	//Query::$link;
?>
