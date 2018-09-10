<?php
    echo "aba";
    include_once '../connection/connect.php';

    if(isset($_POST['submit'])){

        $title1 = $_POST['title'];
        $content1 = $_POST['content'];

        $sql = "INSERT INTO task(title, content) VALUES('$title1', '$content1')";


        if(mysqli_query($conn, $sql) == TRUE){
        echo "No errors";
        }
        else {
            echo "Error: " . $conn->error;
        }
        
    }
    header('Location: /');
