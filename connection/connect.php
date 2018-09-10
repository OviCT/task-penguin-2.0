<?php

    $servername = 'task-penguin.com';
    $username = 'root';
    $password = '';
    $database = 'db-penguin';

    $connection = mysqli_connect($servername, $username, $password, $database);

    if($connection -> error){
        echo "Error: " . $connection -> error;
    }
