<?php 
	include_once 'queryExecution.php';

	class ActionsData
	{
		
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
			print_r($result);
			die();
			$numrows = $result->num_rows; 
		}
	}
?>