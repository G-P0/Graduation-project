<?php
include_once 'Query.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class DataValidation
{
    public $attributes = array();
    public $data = array();
    public $confirmedPass;

    //public $preparedData = array();

    function __construct()
    {
        $this->PreparData();
    }

    function PreparData()
    {
        $mysqli = Database::getInstance()->getConnection();

        $this->confirmedPass = $mysqli->real_escape_string($_POST['passwordconfirm']);
        foreach ($_POST as $key => $value) {
            if ($key == 'submit' || $key == 'passwordconfirm')
                continue;


            if ($key == 'name') {
                $value = filter_var($value, FILTER_SANITIZE_STRING);
            } elseif ($key == 'username') {
                $value = filter_var($value, FILTER_SANITIZE_STRING);
                $this->validateUsername($value);
            } elseif ($key == 'password') {
                $this->validatePassword($value);
            } elseif ($key == 'email') {
                $value = filter_var($value, FILTER_SANITIZE_EMAIL);
                $this->validateEmail($value);
            } elseif ($key == 'phone_no') {
                $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
            }
            $this->attributes[] = $mysqli->real_escape_string($key);
            $this->data[] = $mysqli->real_escape_string($value);
        }

        Query::closeConnection();
    }

    /////////////validateUsername///////////
    function validateUsername($username)
    {
        if (preg_match('[\W]', $username)) {
            $_SESSION['errors']['username'] = 1;
            //"Username cann't contain any spaces or special characters except _ ";
        }

        $query = "SELECT * FROM `users` WHERE `username` = '$username'";
        $result = Query::run($query);
        $numrows = $result->num_rows;
        if ($numrows > 0) {
            $_SESSION['errors']['username'] = 2;
            //"This Username belongs to an existing account. Please try a different Username!";
        }
    }

    ////////////////ValidatePassword//////////////////
    function ValidatePassword($pass)
    {

        if (strlen($pass) < 8) {
            $_SESSION['errors']['password'] = 1;
            //"Password must contain at least 8 characters!";
        }


        if (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $pass)) {
            $_SESSION['errors']['password'] = 2;
            //"Password must contain letters and characters!";
        }

        if ($this->confirmedPass != $pass) {
            $_SESSION['errors']['password'] = 3;
            //"Mismatch of password confirmation. Please enter the same password twice ";
        }
    }

    ///////////////////validateEmail//////////////////////
    function validateEmail($email)
    {
        $query = "SELECT * FROM `users` WHERE `email` = '$email'";
        $result = Query::run($query);
        $numrows = $result->num_rows;
        if ($numrows > 0) {
            $_SESSION['errors']['email'] = 1;
            //"This Email belongs to an existing user. Please try a different Email or simply try to login!";
        }
    }
}

?>