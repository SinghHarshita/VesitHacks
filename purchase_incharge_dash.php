<?php
	include("dbconn.php");
	
	if ($connection->connect_error) {
		die("Connection failed!");
	} 
	
	//$a =$_SESSION['username'];
	//$id = $_SESSION['id'];
	
	$sql="SELECT * FROM pr_request";
	$result=$connection->query($sql);

	$row=$result->fetch_array();
	$resultA=$row['e_id'];

	$sql="SELECT name,Email_id from employee where id='$resultA'";
	$result=$connection->query($sql);

	if($result->num_rows>0)
	{	echo "<table>";
		while($r=$result->fetch_array())
		{
			echo "<tr><td>".$r["name"]."</td><td>".$r["Email_id"]."</td><td>".$row["r_id"]."</td><td>".$row["status"]."</td><td>".$row["date_of_request"]."</td><td>".$row["date_required"]."</td></tr>";
		}
		echo "</table>";
	}

	$connection->close();
?>