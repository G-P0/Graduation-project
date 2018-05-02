<?php 
	include_once 'queryExecution.php';
	session_start();
	class ActionsState
	{
		private $actionsState = array();
		private $username;
		private $homeId;
		private $userPriv;
		function __construct()
		{
			$this->getHomeId();
			$this->getUserPriv();
			$this->getActionsState();
		}
		function getHomeId()
		{
			//get home id from db
			$this->username = $_SESSION['username'];
			$query = "SELECT `home_id` 
							FROM `users` 
							WHERE `username` = '$this->username'";
				$result  = Query::run($query);
				$this->homeId = $result->fetch_assoc()['home_id'];
		}

		function getUserPriv()
		{
		//get user priv from db (0 => not assigned, 1 => norml, 2 => super)
			$this->username = $_SESSION['username'];
			$query = "SELECT `privillage` 
							FROM `users` 
							WHERE `username` = '$this->username'";
				$result  = Query::run($query);
				$this->userPriv = $result->fetch_assoc()['privillage'];
		}

		function getActionsState()
		{
			$query = "SELECT `action_name`, `privillage`, `action_state`
						FROM `action_data`, `actions` 
						WHERE `home_id` = '$this->homeId' 
						AND `action_data`.`action_id` = `actions`.`action_id`";
			$result  = Query::run($query);
			
			while ($row = $result->fetch_assoc()) 
			{
				//classify actions related to normal or super user
				if ($this->userPriv > $row["privillage"] || $this->userPriv == $row["privillage"] ) 
				{
					$this->actionsState[$row["action_name"]] = $row["action_state"];
				}
        		
    		}

    		$_SESSION['actionsState'] = $this->actionsState;
		}
	}
?>