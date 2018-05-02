<?php 
	if (isset($_POST['submit'])) 
	{
		
		if (isset($_POST['submit']) && $_POST['submit'] == "Show Actions Privilege") 
		{
			try 
			{
				include '../models/ActionsPrivilege.php';
				new ActionsPrivilege();
    			header("Location: ../actions.php");
    			die();
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}

		}
		if (isset($_POST['submit']) && $_POST['submit'] == "Update Privllage") 
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
		if (isset($_POST['submit']) && $_POST['submit'] == "Show Actions State") 
		{
			try 
			{
				include '../models/ActionsState.php';
				new ActionsState();
    			header("Location: ../home.php");
    			die();
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}

		}
		if (isset($_POST['submit']) && $_POST['submit'] == "Update State") 
		{
			try 
			{
				include '../models/ActionsStateUpdate.php';
				new ActionsStateUpdate();
    			header("Location: ../home.php");
    			die();
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}

		}

	}	
?>