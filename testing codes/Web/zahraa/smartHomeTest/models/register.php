<?php 
	
	
	class Register
	{
		private $attributes = array();
		private $dataValues = array();

		function __construct()
		{
			$this->getpreparedData();
			$this->insertData();
		}

		function getpreparedData()
		{
			include_once 'dataValidation.php';
			$readyData = new DataValidation(); 
			$this->attributes = $readyData->attributes;
			$this->dataValues = $readyData->data;
		}

		function insertData()
		{			
			$datainsertion = new DataInsertion();

		}
	}
 ?>