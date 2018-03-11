<?php
    $startTime = microtime(true);
    //start page
    $testArray = range(1 , 400000);
    echo "<pre>" ;
    print_r($testArray);
    echo "<pre>" ;   
    //end page
    $endTime = microtime(true);
    $timeTaken = $endTime - $startTime ;
    $timeTaken = round($timeTaken , 5);
    echo $timeTaken;
?>