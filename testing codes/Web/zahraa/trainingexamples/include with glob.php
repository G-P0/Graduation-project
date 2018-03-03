<?php
    foreach(glob('tuts/*.css') as $file){
      
        echo "<link rel='stylesheet' href='".$file."'>";
    }
    

?>