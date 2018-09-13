<?php
	include_once "../connection/connect.php";

	$sql = "DELETE * FROM task";

	if($conn->querry($sql)===TRUE)
	{
		echo "Am sters!";
	}
	else 
	{
		echo "Nu merge";
	}

	$conn->close();