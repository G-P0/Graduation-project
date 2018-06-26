<?php 

	include_once 'Query.php';
	include_once 'functions.php';
	session_start();
	//get data 
	//confirm admin and superkery
	//confirm member name
	//update user home_id to curent home_id
	class NewMemberAddition
	{
		private $data;
		private $memberName;
		private $superKey;
		private $userId;
		private $homeId;
		private $anAdmin;

		function __construct()
		{
			$this->data = functions::getData();
			$this->addNewMember();
		}

		function isValidMemberName()
		{
			$this->memberName = filter_var($this->data['memberName'], FILTER_SANITIZE_STRING);
			$query = "select username from users where username = '". $this->memberName ."'";
			$result = Query::run($query);
			if ($result->num_rows == 1)
				return True;
			else
				throw new Exception("this member name is not registered");	
		}

		function isValidSuperKey()
		{
			$this->userId = functions::getUserIdByUserName($_SESSION['username']);

			$this->homeId = functions::getHomeIdByUserName($_SESSION['username']);

			$this->superKey = filter_var($this->data['superKey'], FILTER_SANITIZE_NUMBER_INT);

			$query = "select super_key from home where home_id ='" .$this->homeId."'and owner_id = '".$this->userId."' and super_key ='".$this->superKey."'";

			$result = Query::run($query);
			if ($result->num_rows == 1)
				return True;
			else
				throw new Exception("not valid superkey");
				
		}

		function isValidAddition()
		{
			//check is an admin - valid superkey - valid membername
			$this->anAdmin = functions::isAnAdmine($_SESSION['username']);

			if($this->anAdmin && $this->isValidSuperKey() && $this->isValidMemberName())
				return True;
			else
				return false;
		}

		function addNewMember()
		{
			if ($this->isValidAddition()) 
			{
				$query = "update users set home_id = '".$this->homeId."' where username ='".$this->memberName."'";
				Query::run($query);
			}
			else
				throw new Exception("you can't add this member");
		}
	}
?>