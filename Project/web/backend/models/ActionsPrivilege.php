<?php 
	include_once 'queryExecution.php';
	session_start();
	class ActionsPrivilege
	{
		private $actionsPriv = array();
		private $home_id;
		private $username; 
		function __construct()
		{
			$this->getHomeId();
			$this->getActionsPrivilege();
		}
		function getHomeId()
		{
			//get home id from db
			$this->username = $_SESSION['username'];
			$query = "SELECT `home_id` 
							FROM `users` 
							WHERE `username` = '$this->username'";
				$result  = Query::run($query);
				$this->home_id = $result->fetch_assoc()['home_id'];
		}

		function getActionsPrivilege()
		{
			$query = "SELECT `action_name`, `privillage` 
						FROM `action_data`, `actions` 
						WHERE `home_id` = '$this->home_id' 
						AND `action_data`.`action_id` = `actions`.`action_id`";
			$result  = Query::run($query);
			while ($row = $result->fetch_assoc()) 
			{
        		$this->actionsPriv[$row["action_name"]] = $row["privillage"];
    		}

    		$_SESSION['actionsPriv'] = $this->actionsPriv;
		}
	}
?>