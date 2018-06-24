<?php

include_once 'Query.php';
include_once 'functions.php';

class getHomeMembers
{
    private $homeId;

    function __construct()
    {
        $this->homeId=functions::getHomeIdByUserName($_SESSION['username']);
        $this->getMembers();
    }

    private function getMembers()
    {
        $query="select username ,name,register_date,privillage ,user_state from users where home_id=".$this->homeId;
        $result=Query::run($query);

        unset($_SESSION['membersInfo']);
        while($row=$result->fetch_assoc())
        {
            $_SESSION['membersInfo'][]=$row;
        }
    }
}