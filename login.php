<?php

	session_start();
	error_reporting(0);
	include('conneclogin.php');
	if($_POST['submit'])
	{
		$us = $_POST['username'];
		$pass = $_POST['password'];
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
			header('location:view.php');
		}
		else
		{
			die("Login Failed....");
		}
	}
	
	
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css"/>
	<script type="text/javascript">
		<script type="text/javascript">
		
		function checkEmail() {

	    var email = document.getElementById("email");
	    var filter= /^([a-zA-Z0-9_\-\.])+\@ves.ac.in$/;
	    var messageDisplay=document.querySelector("#message");

	    if (!filter.test(email.value)) {
	    // alert('Please provide a VES email address');
	    messageDisplay.textContent="Please enter a valid VES Email-ID.";
	    email.textContent=" ";	
	    email.focus;
	    return false;
 		}
		else{
		 	messageDisplay.textContent="";
		 }
		}	
	</script>
</head>
<body id="bod">

<form action="" id="frm" method="post">
		<label for="email">Email-ID:</label>
		<input type="text" id="email" name="email" value="" required/>
		<span id="message"></span><br>
		
		<label for="password">Password:</label><br>
		<input type="password" id="password" name="pwd" value="" required /><br><br>

		<input type="submit" name="submit" value="Submit" onclick='Javascript:checkEmail();'/>

		<label>New User:</label>&nbsp&nbsp<a href="register.php">Register</a>
</form>

</body>
</html>
