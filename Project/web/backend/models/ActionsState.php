<?php
include_once 'Query.php';
include_once 'functions.php';
session_start();

class ActionsState
{
    private $actionsState = array();
    private $homeId;
    private $userPriv;

    function __construct()
    {
        $this->userPriv = functions::getUserPriv($_SESSION['username']);
        $this->homeId = functions::getHomeIdByUserName($_SESSION['username']);
        $this->getActionsState();
    }


    function getActionsState()
    {
        //get normal user privillage

        $query = "select a.action_name, ad.action_state 
                  from actions as a , action_data as ad 
                  where a.action_id=ad.action_id and ad.home_id = " . $this->homeId . "
                   and ad.privillage = 1";
        $result = Query::run($query);
        unset($_SESSION['actionsState']);
        while ($row = $result->fetch_assoc()) {
            //classify actions related to normal or super user
            $this->actionsState['normal_user'][$row["action_name"]] = $row["action_state"];
        }
        //if super user get it's action
        if ($this->userPriv >= 2) {
            $query = "select a.action_name, ad.action_state 
                  from actions as a , action_data as ad 
                  where a.action_id=ad.action_id and ad.home_id = " . $this->homeId . "
                   and ad.privillage >= 2";
            $result = Query::run($query);
            while ($row = $result->fetch_assoc()) {
                //classify actions related to normal or super user
                $this->actionsState['super_user'][$row["action_name"]] = $row["action_state"];
            }
        }
        $_SESSION['actionsState'] = $this->actionsState;
    }
}

?>