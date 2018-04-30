<?php 
	
	
	class Register
	{
		private $attributes = array();
		private $dataValues = array();
		private $registerDate;

		function __construct()
		{
			$this->getpreparedData();
			$this->insertData();
		}

		function getpreparedData()
		{
			include_once 'dataValidation.php';
			$readyData = new DataValidation(); 
			if (isset($_SESSION['errors'])) {
				$_SESSION['data']=$_POST;
				header("Location:../signup.php");
				die();
			}
			$this->attributes = $readyData->attributes;
			$this->dataValues = $readyData->data;
		}

		function getRegisterdate()
		{
			date_default_timezone_set('Africa/Cairo');
			$this->registerDate = date('Y-m-d',time());
		}

		function insertData()
		{	
			include_once 'dataInsertion.php';		
			$datainsertion = new DataInsertion($this->attributes, $this->dataValues);
		}
	}
 ?>