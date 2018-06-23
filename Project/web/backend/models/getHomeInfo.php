<?php
/**
 * Created by PhpStorm.
 * User: zaian
 * Date: 6/22/2018
 * Time: 3:06 PM
 */

include_once 'Query.php';
include_once 'functions.php';

class getHomeInfo
{

    private $homeId;


    function __construct()
    {
        $this->homeId = functions::getHomeIdByUserName($_SESSION['username']);
        $this->getHomeInfo();
    }


    function getHomeInfo()
    {
        $query = "select u.name,u.username,u.email,u.register_date,h.address,h.super_key,h.public_key,h.home_name 
        FROM users as u , home as h
        WHERE  h.home_id=".$this->homeId." and u.username='".$_SESSION['username']."'";
        $_SESSION['homeInfo']=Query::run($query)->fetch_assoc();


    }
}