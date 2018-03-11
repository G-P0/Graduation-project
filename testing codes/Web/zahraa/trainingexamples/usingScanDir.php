<?php
    $dir = __DIR__ . '/tuts/' ;
    $ext=array("php","inc");
    foreach(scandir($dir) as $file){
        if(in_array(pathinfo($file, 'PATHINFO_EXTENTION'),$ext)){
            include $dir.$file;
        }
    }


?>