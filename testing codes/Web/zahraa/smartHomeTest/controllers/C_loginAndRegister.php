<?php 
	if (isset($_POST['submit'])) 
	{
		
		//Login
		if (isset($_POST['submit']) && $_POST['submit'] == "login") 
		{
			include '../models/login.php';
			new Login();
		}

		//Register
		if (isset($_POST['submit']) && $_POST['submit'] == "register")
		{
			include '../models/register.php';
			new Register();	
		}
	}
?>