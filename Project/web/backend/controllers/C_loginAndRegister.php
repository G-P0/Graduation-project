<?php
session_start();
include_once "../includes/paths.php";



	if (isset($_POST['submit'])) 
	{
		
		//Login
		if (isset($_POST['submit']) && $_POST['submit'] == "login") 
		{
			try 
			{
				include '../models/login.php';
				new Login();
                header("Location: ../index.php");
                die();
				
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}
			
		}

		//Register
		if (isset($_POST['submit']) && $_POST['submit'] == "register")
		{
			try 
			{
				
				include '../models/register.php';
				new Register();	
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}
				
		}
	}

if (!isset($_SESSION['username'])) {
    header("Location:$rootpath/");
    die();
}
?>