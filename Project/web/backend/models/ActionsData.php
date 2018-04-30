<?php 
	include_once 'queryExecution.php';
	session_start();
	class ActionsData
	{
		private $actionsPriv = array();
		function __construct()
		{
			$this->getActionsData();
		}

		function getActionsData()
		{
			$query = "SELECT `action_name`, `privillage` 
						FROM `action_data`, `actions` 
						WHERE `home_id` = '1' 
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