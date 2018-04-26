<?php 

class DBConnection 
{
	
	public static function connectToDb()
	{
		$mysqli = Database::getInstance()->getConnection();
	}
}

?>