<?php 
    $weather = file_get_contents("http://www.weather.com.cn/data/sk/101010100.html"); 
    echo $weather; 
?> 
