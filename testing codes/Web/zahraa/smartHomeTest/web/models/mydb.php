<?php
/*
* Mysql database class - only one connection alowed
  $db = Database::getInstance();
  $mysqli = $db->getConnection(); 
  $sql_query = "SELECT foo FROM .....";
  $result = $mysqli->query($sql_query);

///////////////////
class Query extends Database {
public static function run($sql) {
return parent::getInstance()->getConnection()->query($sql);
}
}

You can use this static function in your classes

$result = Query::run(query);

//////////////////////
public function __destruct() {
    $this->_connection->close();
}
*/
class Database {
	private $_connection;
	private static $_instance; //The single instance
	private $_host = "HOSTt";
	private $_username = "USERNAME";
	private $_password = "PASSWORd";
	private $_database = "DATABASE";

	/*
	Get an instance of the Database
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	// Constructor
	private function __construct() {
		$this->_connection = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
	
		// Error handling
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
	}

	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }

	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}
}
?>