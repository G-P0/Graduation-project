<?php 
	if (isset($_POST['submit'])) 
	{
		if (isset($_POST['submit']) && $_POST['submit'] == "Login") 
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			try 
			{
				include '../models/loginModel.php';
				$login = new Login($username, $password);
				if ($login == TRUE) 
				{
					session_start();
					$_SESSION['username'] = $username;
					header("Location: ../index.php");
					die();

				}
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();	
			}
		}
		if (isset($_POST['submit']) && $_POST['submit'] == "Register")
		{
			$keys = array();
			$values = array();
			foreach ($_POST as $key => $value) 
			{
				
				if ($key == 'submit') 
					continue;
				else
				{
					$keys[] = $key;
					$values[] = $value;
				}
			}
			try 
			{
				include '../models/registerModel.php';
				new Register($keys, $values);	
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();	
			}
		}
	}
	else
	{
		include './login.php';
	}
 ?>