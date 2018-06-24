<?php 
	include_once 'Query.php';
	include_once 'functions.php';
	session_start();
	class ActionsStateUpdate
	{
		private $actionsState = array();
		private $homeId;
		private $username;
		function __construct()
		{
			$this->actionsState = functions::getData();
			$this->updateActionsState();
		}

		function updateActionsState()
		{
			$this->homeId = functions::getHomeIdByUserName($_SESSION['username']);

			foreach ($this->actionsState as $action => $state) 
			{
				$query = "SELECT `action_id` 
							FROM `actions` 
							WHERE `action_name` = '$action'";
				$result  = Query::run($query);
				$action = $result->fetch_assoc()['action_id'];

				$query = "UPDATE `action_data` 
							SET `action_state` = '$state' 
							WHERE `home_id` = '$this->homeId' 
							AND `action_data`.`action_id` = '$action'";
				$result  = Query::run($query);
			}
			
			if ($result)
			{
				$_SESSION['actionsState'] = $this->actionsState;
			}

			else
			{
				//$_SESSION['errors']['update'] = 1;
				throw new Exception("Invalid update. Please try again !");
			}
		}
	}
?>