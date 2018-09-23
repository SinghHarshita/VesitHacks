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
	echo "<a href='adminview.php'>Go To Home Page</a><br><br>";
	/*$mysql_host='localhost';
	$mysql_user='root';
	$mysql_password='root';
	$connection = new mysqli($mysql_host,$mysql_user,$mysql_password,'asset_tracker');*/
	include('dbconn.php');
	if(($_SESSION['username']!='2017.jay.bendre@ves.ac.in'))
	{
		header('location:logout.php');
	}
	$qur = "SELECT a.name as n,b.dept as m FROM employee as a INNER JOIN purchase_incharge as b where a.id=b.p_inc_id";
	$res = $connection->query($qur);
	echo "<br><br>Purchase Incharges of Respective Department....<br><br>";
	echo "<table><tr><th>Name</th><th>Department</th></tr>";
	while($r = $res->fetch_assoc())
	{
		echo "<tr><td>".$r['n']."</td><td>".$r['m']."</td></tr>";
	}
	echo "</table>";
	$connection->free();
	
?>