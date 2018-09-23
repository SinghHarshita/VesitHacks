<?php

	session_start();
	error_reporting(0);
	include('conneclogin.php');
	if($_POST['submit'])
	{
		$us = $_POST['username'];
		$pass = $_POST['password'];
		$qur = "SELECT * from users where email_id = '$us' and password = '$pass'";
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
			header('location:view.php');
		}
		else
		{
			die("Login Failed....");
		}
	}
	
	
	

?>

<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body id="bod">

<form action="" id="frm" method="post">
		<label>Email-ID:</label>
		<input type="text" id="tex1" name="username" value="" required/><br><br>
		<label>Password:</label>
		<input type="password" id="pass" name="password" value="" required/><br><br>
		<input type="submit" id="btn" name="submit" value="Login"/>
		<label>New User:</label>&nbsp&nbsp<a href="register.php">Register</a>
</form>

</body>
</html>