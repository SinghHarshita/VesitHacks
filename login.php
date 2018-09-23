<?php

	session_start();
	error_reporting(0);
	include('dbconn.php');
	if($_POST['submit'])
	{
		$us = $_POST['e'];
		$pass = $_POST['p'];
		$qur = "SELECT * from employee where Email_id = '$us' and Password = '$pass'";
		$result = mysqli_query($ser,$qur);
		if($result)
		{
			echo "Query successful.....<br><br>";
		}
		$res = mysqli_num_rows($result);
		if($res)
		{
			$_SESSION['username'] = $us;
			$res = mysqli_fetch_assoc($result);
			//echo $us;
			$_SESSION['id'] = $res['id'];
			$_SESSION['designation'] = $res['designation'];
			$d = $_SESSION['designation'];
			
			if($d == "staff")
			{
				header('location:assetStaff.php');
			}
			else if($d == "po")
			{
				header("location:po.php");
			}
			else if($d == "dpo")
			{
				header('location:purchase_incharge.php');
			}
			else if($d == "admin")
			{
				header('location:adminview.php');
			}
			else if($d == "hod")
			{
				header('location:hod.php');
			}
			else if($d == "principal")
			{
				header('location:principal.php');
			}
			else 
				header('location:other.php');
		}
		else
		{
			die("Login Failed....");
		}
	}
	
?>

