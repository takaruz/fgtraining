<?php

    $servername = "redis";
    $port = 6379;

    // Create connection
    $redis = new Redis();
    
    try {
        
        $redis->connect($servername, $port);
        echo $redis->ping();
        
    } catch (Exception $e) {
        
        echo "Connection failed: $e";
        
    }
    
?>