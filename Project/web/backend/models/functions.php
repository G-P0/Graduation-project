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

    public static function getUserIdByUserName($username)
    {

        $query = "select user_id from users where username ='" . $username . "'";
        return Query::run($query)->fetch_assoc()['user_id'];
    }

    public static function getHomeIdByUserName($username)
    {

        $query = " select home_id from users where username = '" . $username . "'";
        return Query::run($query)->fetch_assoc()['home_id'];

    }

    public static function getUserPriv($username)
    {
        //get user priv from db (0 => not assigned, 1 => norml, 2 => super, 3 => admin)

        $query = "SELECT `privillage` 
							FROM `users` 
							WHERE `username` = '" . $username . "'";

        $result = Query::run($query);
        return $result->fetch_assoc()['privillage'];
    }

    public static function getData()
    {
        //get post data
        foreach ($_POST as $key => $value) {
            if ($key == 'submit')
                continue;
            $data[$key] = $value;
        }

        return $data;
    }

    public static function isAnAdmine($username)
    {
        $query = "select privillage from users where username='" . $username . "'";
        $privillage = Query::run($query)->fetch_assoc()['privillage'];
        if ($privillage == 3)
            return true;
        else
            return false;

    }

    public static function splitArrayKeysAndValues($array)
    {
        foreach ($array as $key=>$value)
        {
            $result['keys'][] = $key;
            $result['values'][] = $value;
        }
        return $result;
    }

    public static function implodeFeildsForQueryUpdate($array){

        $query=" ";
        foreach ($array as $key=>$value)
        {
            $query.="`$key` = `$value` ,";
        }

        return $query;
    }

    public static function prepareRequestData($array,$exp)
    {
        foreach ($exp as $value)
        {
            unset($array[$value]);
        }
        return $array;
    }


    public  static function send_data($array)
    {
        unset($array['submit']);
        $url = '192.168.43.29/body';

//Initiate .
        $ch = curl_init($url);
//The JSON data.
//Encode the array into JSON.
        $jsonDataEncoded = json_encode($array);

//Tell cURL that we want to send a POST request.
        curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
        $result = curl_exec($ch);
    }

}