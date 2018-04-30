<?php 
	include_once 'queryExecution.php';
	session_start();
	class ActionsPrivillageUpdate
	{
		private $actionsPriv = array();
		function __construct()
		{
			$this->getData();
			$this->updateActionsPriv();
		}

		function getData()
		{
			foreach ($_POST as $key => $value) 
			{
				if ($key == 'submit') 
					continue;
				$this->actionsPriv[$key] = $value;
			}
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
							WHERE `home_id` = '1' 
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