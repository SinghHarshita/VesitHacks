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
	/*$q = "SELECT a.i_id,a.p_name,a.number,a.r_id,b.e_id FROM indent as a INNER JOIN pr_request as b where a.r_id = b.r_id";
	$r1 = $connection->query($q);
	$qur ="SELECT c.i_id,c.p_name,c.number,c.r_id,c.e_id,d.name FROM '$r1' as c INNER JOIN employee as d where c.e_id=d.id";
	$result = $connection->query($qur);*/
	
	
	
	
	$qur = "SELECT c.i_id as i,c.p_name as j,c.number as k,c.r_id as l,c.e_id as m,d.name as n FROM (SELECT a.i_id,a.p_name,a.number,a.r_id,b.e_id FROM indent as a INNER JOIN pr_request as b where a.r_id = b.r_id) as c INNER JOIN employee as d where c.e_id=d.id";
	$result = $connection->query($qur);
	echo "<br>Indent Details are....<br><br>";
	echo "<table><tr><th>Customer-ID</th><th>Name</th><th>Indent-ID</th><th>Product Name</th><th>No Of Products</th><th>Request-ID</th></tr>";
	while($r=$result->fetch_assoc())
	{
		echo "<tr><td>".$r['m']."</td><td>".$r['n']."</td><td>".$r['i']."</td><td>".$r['j']."</td><td>".$r['k']."</td><td>".$r['l']."</td></tr>";
	}
	echo "</table>";

?>