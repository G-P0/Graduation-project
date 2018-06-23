<?php
/**
 * Created by PhpStorm.
 * User: zaian
 * Date: 6/22/2018
 * Time: 6:30 PM
 */
include_once 'Query.php';
include_once 'functions.php';

class removeMemberFromHome
{
    private $username;

    function __construct($username)
    {
        $this->username = $username;
        $this->removeMember();

    }

    private function checkIfLegalRemove()
    {
        $query = "select privillage from users where username='" . $this->username . "'";
        $privillage = Query::run($query)->fetch_assoc()['privillage'];
        if ($privillage == 2) // should be 3 for admins
            return false;
        return true;
    }

   private function removeMember()
    {
        if (!$this->checkIfLegalRemove())
            throw new Exception("u can't remove an admin");
        $query = "update users set home_id=-1 where username='" . $this->username . "'";
        Query::run($query);

    }
}