<?php

    $servername = "mongo";
    $port = 27017;
    
    try {
        
        $manager = new MongoDB\Driver\Manager("mongodb://$servername:$port");
        $command = new MongoDB\Driver\Command(['ping' => 1]);
        $manager->executeCommand('db', $command);
        
        echo "<pre>";
        var_dump($manager->getServers());
        echo "</pre>";
        
    } catch (Exception $e) {
        
        echo "Connection failed: $e";
        
    }
    
?>