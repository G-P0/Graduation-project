<?php 
	include_once 'Query.php';
	include_once 'functions.php';
	session_start();
	class ActionsPrivillageUpdate
	{
		private $actionsPriv = array();
		private $home_id;
		private $username;
		function __construct()
		{
			$this->actionsPriv = functions::getData();
			$this->updateActionsPriv();
		}

		function updateActionsPriv()
		{
			$this->home_id = functions::getHomeIdByUserName($_SESSION['username']);

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