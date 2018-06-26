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
    private $anAdmin;

    function __construct($username)
    {
        $this->username = $username;
        $this->removeMember();
    }

   private function removeMember()
    {
        $this->anAdmin = functions::isAnAdmine($this->username);
        if ($this->anAdmin)
            throw new Exception("u can't remove an admin");
        $query = "update users set home_id = -1 where username='" . $this->username . "'";
        Query::run($query);

    }
}