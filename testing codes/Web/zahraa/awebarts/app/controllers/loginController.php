<?php 
	if (isset($_POST['submit'])) 
	{
		//Login
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

		//Register
		if (isset($_POST['submit']) && $_POST['submit'] == "Register")
		{
			try 
			{
				include '../models/registerModel.php';
				new Register();	
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();	
			}
		}
	}
?>