<?php

    include_once '../connection/connect.php'

    $name = $_POST['Task_Name'];
    $description = $_POST['Description'];
   /// $deadline =  $_POST['Deadline'];

    $sql = 'INSERT INTO task(Task_Name, Description/*, Deadline*/) VALUES($name, $description/*, $deadline*/)';

    if(mysqli_querry($connection, $sql) == FALSE){
        echo "Error: " . $connection ->error;  
    }