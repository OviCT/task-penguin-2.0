<?php

    $servername = 'task-penguin.com';
    $username = 'root';
    $password = '';
    $database = 'db-penguin';

    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($conn->error) {
        echo "Error: " . $conn->error;
    }