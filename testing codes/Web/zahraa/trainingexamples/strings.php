<?php
    $names = array("osama","Ali","sayed","hassan");
    $forbiddenNames = array("root","admin","system");
    $user = "Ali";
    if(in_array($user,$names)){
        echo "your name is allawed <br>";
        if(strlen($user) >= 3){
            echo "your name length is greater than three <br>";
            if(!in_array($user,$forbiddenNames)){
                echo "congratulations your name is not forbidden ^^ ";
            }
        }
    }
?>