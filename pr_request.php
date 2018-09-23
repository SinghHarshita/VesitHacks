<style>
	th,td
	{
		padding:10px;
		border:5px solid black;
	}
	a
	{
		text-align:center;
	}
</style>


<?php
	
	error_reporting(0);
	session_start();
	echo "<br><a href='adminview.php'>Go To Home Page</a><br><br>";
	/*$mysql_host='localhost';
	$mysql_user='root';
	$mysql_password='root';
	$connection = new mysqli($mysql_host,$mysql_user,$mysql_password,'asset_tracker');*/
	include('dbconn.php');
	if(($_SESSION['username']!='2017.jay.bendre@ves.ac.in'))
	{
		header('location:logout.php');
	}
	$qur = "SELECT a.name as n,b.r_id,b.status,b.date_of_request,b.date_required FROM employee as a INNER JOIN pr_request as b where a.id=b.e_id";
	$result=$connection->query($qur);
	echo "Purchase Request Details.....<br><br>";
	if($result->num_rows>0)
	{
		echo "<table><tr><th>Name</th><th>Request-ID</th><th>Status</th><th>Request-Date</th><th>Required-Date</th></tr>";
		while($row=$result->fetch_assoc())
		{
			echo "<tr><td>".$row['n']."</td><td>".$row['r_id']."</td><td>".$row['status']."</td><td>".$row['date_of_request']."</td><td>".$row['date_required']."</td></tr>";
		}
		echo"</table>";
	}
	//$connection->free();
?>