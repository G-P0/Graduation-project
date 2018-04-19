<?php
	include_once 'database.php';
	class Query extends Database 
	{
		public static $link;
		public static function run($sql) 
		{
			self::$link = parent::getInstance()->getConnection();
			return self::$link->query($sql);
		}

		public static function closeConnection() 
		{
			if (self::$link) 
			{
				self::$link->close();
			}
		}
	}

	//$result = Query::run($query);
	//Query::closeConnection();
	//Query::$link;
?>
