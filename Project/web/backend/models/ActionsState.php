<?php 
	include_once 'Query.php';
	include_once 'functions.php';
	session_start();
	class ActionsState
	{
		private $actionsState = array();
		private $username;
		private $homeId;
		private $userPriv;
		function __construct()
		{
			$this->getUserPriv();
			$this->getActionsState();
		}

		function getUserPriv()
		{
		//get user priv from db (0 => not assigned, 1 => norml, 2 => super, 3 => admin)
			$this->username = $_SESSION['username'];
			$query = "SELECT `privillage` 
							FROM `users` 
							WHERE `username` = '$this->username'";
				$result  = Query::run($query);
				$this->userPriv = $result->fetch_assoc()['privillage'];
		}

		function getActionsState()
		{
			$this->homeId = functions::getHomeIdByUserName($this->username);
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