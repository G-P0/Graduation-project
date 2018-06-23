<?php 
	include_once 'Query.php';
	session_start();
	class ActionsStateUpdate
	{
		private $actionsState = array();
		private $homeId;
		private $username;
		function __construct()
		{
			$this->getData();
			$this->getHomeId();
			$this->updateActionsState();
		}

		function getData()
		{
			//get post data
			foreach ($_POST as $key => $value) 
			{
				if ($key == 'submit') 
					continue;
				$this->actionsState[$key] = $value;
			}
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
		function updateActionsState()
		{
			
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