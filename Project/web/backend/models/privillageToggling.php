<?php 

	include_once 'Query.php';
	include_once 'functions.php';
	//edited user not an admine
	//edit 
	class PrivillageToggling
	{
		private $username;
		private $privillage;
		private $anAdmine;
		
		function __construct($username, $privillage)
		{
			$this->username = $username;
			$this->privillage = $privillage;
			$this->togglePrivillage($username, $privillage);

		}

		function togglePrivillage($username, $privillage)
		{
			$this->anAdmine = functions::isAnAdmine($this->username);
			if($this->anAdmine)
				throw new Exception("You can't change Admine privillage");
			//toggle privillage before updating db
			if ($this->privillage == 0 or $this->privillage == 2) 
			{
				$this->privillage = 1 ; //make not active members and super users -> normal users
			}
			elseif ($this->privillage == 1) 
			{
				$this->privillage = 2 ; //make normal user -> super user
			}
			//update db with new privillages
			$query = "update users set privillage = '".$this->privillage."' where username = '".$this->username."'";
			Query::run($query);
		}
	}

?>