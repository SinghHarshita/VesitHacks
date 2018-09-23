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

	session_start();
	error_reporting(0);
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
	echo "<br><br>Users Info<br><br>";
	$qur = "SELECT * FROM employee";
	$result = $connection->query($qur);
	echo "<table><tr><th>ID</th><th>Name</th><th>Email-ID</th><th>Password</th><th>Department</th><th>Designation</th><th colspan='2'>Operation</th></tr>";
	while($r = $result->fetch_assoc())
	{
		$a = $r['id'];
		$b = $r['name'];
		$c = $r['Email_id'];
		$d = $r['Password'];
		$e = $r['dept_name'];
		$f = $r['designation'];
		echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td><td>".$d."</td><td>".$e."</td><td>".$f."</td><td><a href='edit.php?a=$a&b=$b&c=$c&d=$d&e=$e&f=$f'>Edit</a></td><td><a href='remove.php?i=$a'>Remove</a></td></tr>";
	}
	$connection->free();

?>