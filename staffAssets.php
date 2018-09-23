<?php
	session_start();
	include("dbconn.php");
	
	if ($connection->connect_error) {
		die("Connection failed!");
	} 
	
	$a =$_SESSION['username'];
	$id = $_SESSION['id'];
	//echo $id;
	
	/*$sql = "SELECT id FROM employee WHERE Email_id='$a'";
	
	$result = mysqli_query($connection,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		$row = $result->fetch_assoc();
		$result = $row["r_id"];
		//echo $result;
	}*/
	
	$sql = "SELECT r_id FROM pr_request WHERE e_id='$id'";
	
	$result = $connection->query($sql);
	//$row="";
	//if($result->num_rows>0)
	//{
		$row = $result->fetch_array();
		$result = $row['r_id'];
		/*print_r($row);
		print_r($result);*/
	//}
	
	$sql = "SELECT * FROM indent WHERE r_id IN('$result')";
	
	$result = $connection->query($sql);
	
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo $row["p_name"]." ".$row["number"]."<br />";
    }
	} else {
		echo "0 assets";
		//echo $id;
	}
	
	$connection->close();

?>