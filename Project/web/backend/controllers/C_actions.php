<?php 
	if (isset($_POST['submit'])) 
	{
		
		if (isset($_POST['submit']) && $_POST['submit'] == "actionData") 
		{
			try 
			{
				include '../models/ActionsData.php';
				new ActionsData();
    			header("Location: ../actions.php");
    			die();
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}

		}
		if (isset($_POST['submit']) && $_POST['submit'] == "updateActionPrivllage") 
		{
			try 
			{
				include '../models/ActionsPrivillageUpdate.php';
				new ActionsPrivillageUpdate();
    			header("Location: ../actions.php");
    			die();
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}

		}

	}	
?>