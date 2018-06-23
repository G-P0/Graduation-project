<?php 
	include_once 'Query.php';
	session_start();
	class ActionsPrivillageUpdate
	{
		private $actionsPriv = array();
		private $home_id;
		private $username;
		function __construct()
		{
			$this->getData();
			$this->getHomeId();
			$this->updateActionsPriv();
		}

		function getData()
		{
			//get post data
			foreach ($_POST as $key => $value) 
			{
				if ($key == 'submit') 
					continue;
				$this->actionsPriv[$key] = $value;
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
				$this->home_id = $result->fetch_assoc()['home_id'];
		}
		function updateActionsPriv()
		{
			
			foreach ($this->actionsPriv as $action => $priv) 
			{
				$query = "SELECT `action_id` 
							FROM `actions` 
							WHERE `action_name` = '$action'";
				$result  = Query::run($query);
				$action = $result->fetch_assoc()['action_id'];

				$query = "UPDATE `action_data` 
							SET `privillage` = '$priv' 
							WHERE `home_id` = '$this->home_id' 
							AND `action_data`.`action_id` = '$action'";
				$result  = Query::run($query);
			}
			
			if ($result)
			{
				$_SESSION['actionsPriv'] = $this->actionsPriv;
			}
			else
			{
				//$_SESSION['errors']['update'] = 1;
				throw new Exception("Invalid update. Please try again !");
			}
		}
	}
?>