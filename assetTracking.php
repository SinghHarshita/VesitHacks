<?php

	session_start();
	$id = $_SESSION['id'];
	include("dbconn.php");
	
	if ($connection->connect_error) {
		die("Connection failed!");
	} 
	$flag = 0;
	$sql = "SELECT status,r_id FROM pr_request WHERE e_id='$id'";
	
	$result1 = $connection->query($sql);
	$result = "";
	$row = $result1->fetch_assoc();
	$result = $row['r_id'];
	
	$sql = "SELECT * FROM indent WHERE r_id IN('$result')";
	$result2 = $connection->query($sql);
	
	if ($result2->num_rows > 0) {
		echo "<table> <tr>";
		while($row2 = $result2->fetch_assoc()) {
		echo "<td>".$row2["p_name"]."</td>";
		}
		echo "</tr>";
		echo "<tr>";
		if ($result1->num_rows > 0) {
			while($row2 = $result1->fetch_assoc()) {
			echo "<td>".$row2["status"]."</td>";
			}
		}
		echo "</tr></table>";
		$flag=1;
    }
	
	$connection->close();

?>