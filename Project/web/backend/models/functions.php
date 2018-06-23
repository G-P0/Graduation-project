<?php
/**
 * Created by PhpStorm.
 * User: zaian
 * Date: 6/22/2018
 * Time: 3:10 PM
 */

include_once "Query.php";

class functions
{

        public static function getUserIdByUserName($username){

        $query="select user_id from users where username ='".$username."'";
        return Query::run($query)->fetch_assoc()['user_id'];
    }
    public static function getHomeIdByUserName($username){

        $query="select home_id from users where username ='".$username."'";
        return Query::run($query)->fetch_assoc()['home_id'];
    }

}