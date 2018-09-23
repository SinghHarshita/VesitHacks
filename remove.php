

<?php

	session_start();
	error_reporting(0);
	if(($_SESSION['username']!='2017.jay.bendre@ves.ac.in'))
	{
		header('location:login.php');
	}
	/*$mysql_host='localhost';
	$mysql_user='root';
	$mysql_password='root';
	$connection = new mysqli($mysql_host,$mysql_user,$mysql_password,'asset_tracker');*/
	include('dbconn.php');
	$id = $_GET['i'];
	$qur = "DELETE FROM employee WHERE id='$id'";
	$connection->query($qur);
	header('location:users.php');
	$connection->free();

?>