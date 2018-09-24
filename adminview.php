<?php

	session_start();
	error_reporting(0);
	/*$mysql_host='localhost';
	$mysql_user='root';
	$mysql_password='root';
	$connection = new mysqli($mysql_host,$mysql_user,$mysql_password,'asset_tracker');*/
	include('dbconn.php');
	if(($_SESSION['username']!='2017.jay.bendre@ves.ac.in'))
	{
		header('location:logout.php');
	}
	echo "<a href='users.php'>Members of VESIT</a><br><br>";
	echo "<a href='purchaseincharges.php'>Purchase Order Incharge</a><br><br>";
	echo "<a href='pr_request.php'>Purchase Order Request</a><br><br>";
	echo "<a href='indent.php'>Indent</a><br><br>";
	$connection->free();

?>