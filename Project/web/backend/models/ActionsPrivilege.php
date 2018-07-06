<?php
include_once 'Query.php';
include_once 'functions.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class ActionsPrivilege
{
    private $actionsPriv = array();
    private $home_id;

    function __construct()
    {
        $this->getActionsPrivilege();
    }

    function getActionsPrivilege()
    {
        $this->home_id = functions::getHomeIdByUserName($_SESSION['username']);
        $query = "SELECT `action_name`, `privillage`
						FROM `action_data`, `actions`
						WHERE `home_id` = '$this->home_id'
						AND `action_data`.`action_id` = `actions`.`action_id`";
        $result = Query::run($query);
        while ($row = $result->fetch_assoc()) {
            $this->actionsPriv[$row["action_name"]] = $row["privillage"];
        }

        $_SESSION['actionsPriv'] = $this->actionsPriv;
    }
}

?>
