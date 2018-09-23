<?php

	include "dbconn.php";
	include "login.php"
	 
	if ($connection->connect_error) {
		die("Connection failed!");
	} 
	
	$sql = "SELECT id FROM employee WHERE Email_id='$us'";
	
	$result = $connection->query($sql);
	
	if($result->num_rows == 1)
	{
		$row = $result->fetch_assoc();
		$result = $row["id"];
		//echo $result;
	}
	
	$sql = "SELECT r_id FROM pr_request WHERE e_id='$result'";
	
	$result = $connection->query($sql);
	
	if($result->num_rows>0)
	{
		$row = $result->fetch_assoc();
		$result = $row["r_id"];
		//echo $result;
	}
	
	$sql = "SELECT * FROM indent WHERE r_id='$result'";
	
	$result = $connection->query($sql);
	
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo $row["p_name"]." ".$row["number"];
    }
	} else {
		echo "0 assets";
	}
	
	$connection->close();

?>