<?php

    include_once "../connection/connect.php";

    $sql = "SELECT * FROM task";
    
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
        echo "No rows boss";
    }