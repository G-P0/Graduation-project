<?php
session_start();
include_once "../includes/paths.php";
if (!isset($_SESSION['username'])) {
    header("Location:$rootpath/");
    die();
}

if (isset($_POST['submit']))
{

    if (isset($_POST['submit']) && $_POST['submit'] == "Show Actions Privilege") 
    {
        //setted in the get request section
        try 
        {
            include '../models/ActionsPrivilege.php';
            new ActionsPrivilege();
            header("Location: ../actions.php");
            die();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }

    } 
    else if (isset($_POST['submit']) && $_POST['submit'] == "Update Privllage") 
    {
        try 
        {
            include '../models/ActionsPrivillageUpdate.php';
            new ActionsPrivillageUpdate();
            header("Location:" . $rootpath . "/dashboard.php");
            die();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }

    } 
    else if (isset($_POST['submit']) && $_POST['submit'] == "Show Actions State") 
    {
        try 
        {
            include '../models/ActionsState.php';
            new ActionsState();
            header("Location: ../homecontrol.php");
            die();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }

    } 
    else if (isset($_POST['submit']) && $_POST['submit'] == "Update State") 
    {
        try 
        {

            include '../models/ActionsStateUpdate.php';
            new ActionsStateUpdate();
            header("Location: $rootpath/homecontrol.php");

        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
    }
    else if (isset($_POST['submit']) && $_POST['submit'] == "addMember") 
    {
        try 
        {
            include '../models/NewMemberAddition.php';
            new NewMemberAddition();
            header("Location:" . $rootpath . "/controllers/C_actions.php?getPage=dashboard");
            die();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
    }
}
else if (isset($_POST['delete-member']) && $_POST['delete-member'] == "Delete") 
{
    try
    {
        include_once '../models/removeMemberFromHome.php';
        new removeMemberFromHome($_POST['username']);
        header("Location:" . $rootpath . "/controllers/C_actions.php?getPage=dashboard");
        die();

    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
}

elseif (isset($_GET['getPage'])) 
{
    if ($_GET['getPage'] == "dashboard") 
    {
        try 
        {
            include '../models/ActionsPrivilege.php';
            include '../models/getHomeInfo.php';
            include_once '../models/getHomeMembers.php';
            new ActionsPrivilege();
            new getHomeInfo();
            new getHomeMembers();
            header("Location:" . $rootpath . "/dashboard.php");
            die();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
    }
    else if ($_GET['getPage'] == "homecontrol") 
    {
        try 
        {

            include '../models/ActionsState.php';
            new ActionsState();
            header("Location: ../homecontrol.php");
            die();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
    }
}
?>
