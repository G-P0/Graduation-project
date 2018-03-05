<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo $_POST['username']. '<br />';
        $allBrowsers = implode(',' , $_POST['browser']);
        echo $allBrowsers.'<br />';
        
        $splitted = explode(',' , $allBrowsers);
        foreach ($splitted as $singleB){
            echo'<a href="#">'. $singleB.'</a><br />';
        }
    }

?>


<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="username" /><br />
    <input type="checkbox" name="browser[]" value="chrome" /> Chrome <br />
    <input type="checkbox" name="browser[]" value="opera" /> Opera <br />
    <input type="checkbox" name="browser[]" value="firefox" /> Firefox <br />
    <input type="submit" value="Add" />
</form>