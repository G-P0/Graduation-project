<?php 
	if (isset($_POST['submit'])) 
	{
		
		if (isset($_POST['submit']) && $_POST['submit'] == "actionData") 
		{
			try 
			{
				include '../models/ActionsData.php';
				new ActionsData();
				
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}

		}
	}	
?>