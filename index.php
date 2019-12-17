<?php
    $imgCat=array('animal','architecture','nature','people','tech');
    for ($x=0;$x<20;$x++){
        $imgurl="https://placeimg.com/30".($x%10)."/300/".$imgCat[rand(0,4)];   
        echo "<img src='".$imgurl."'>".PHP_EOL;    
    }
    // echo $imgCat[rand(0,4)];
    
?>