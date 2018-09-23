<?php

	session_start();
	
	include("dbconn.php");
	$id = $_SESSION['id'];
	
	$product = $_POST["product"];
	$number = $_POST["number"];
	
	$date = date("Y-m-d");
	
	$sql = "INSERT INTO pr_request(e_id,date_of_request) VALUES '$id','$date'";
	
	$connection->query($sql);
	
	$sql = "SELECT r_id FROM pr_request WHERE e_id='$id' AND date_of_request='$date'";
	$result = $connection->query($sql);
	
	$row = $result->fetch_assoc();
	$result = $row['r_id'];
	
	$_SESSION["r_id"]=$result;
	
	$sql = "INSERT INTO indent(r_id,p_name,number) VALUES('$result','$product','$number')";

?>