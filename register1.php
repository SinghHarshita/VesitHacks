<?php

	include('conneclogin.php');
	error_reporting(0);
	if($_POST['submit'])
	{
		$email = $_POST['email_id'];
		$sql = "SELECT * FROM USERS WHERE email_id='$email'";
		$res = mysqli_query($ser,$sql);
		$result = mysqli_num_rows($res);
		if($result)
		{
			die("Account of your ID already Exists");
		}
		$name = $_POST['name'];
		$deptname = $_POST['dept_name'];
		$designation = $_POST['designation'];
		$pwd = $_POST['pwd'];
		$sql1 = "SELECT MAX(id) as id_m FROM users";
		$qur = mysqli_query($ser,$sql1);
		$res1 = mysqli_fetch_array($qur);
		$id = $res1["id_m"] + 1;
		echo $id;
		$sql2 = "INSERT INTO employee(id,name,Email_id,Password,dept_name,designation) values('$id','$name','$email','$pwd','$deptname','$designation')";
		$res2 = mysqli_query($ser,$sql2);
		if($res2)
		{
			session_start();
			$_SESSION['username'] = $email;
			$_SESSION['id'] = $id;
			header('location:view.php');
		}
		else
		{
			echo "Error.....";
		}
	}
	
	
	

?>




<html>
	<head>
		<script>
			
		</script>
	</head>
	<body>
		<p>All Fileds are Mandatory....</p><br><br>
		<form action="" method="post" enctype="multipart/form-data">
			<label>Email-ID:</label><br>
			<input type="text" name="email_id" value="" required /><br><br>
			<label>Name:</label><br>
			<input type="text" name="name" value="" pattern="[a-zA-Z]{3,}" required /><br><br>
			<label>Designation:</label><br>
			<input type="text" name="designation" value="" pattern="[a-zA-Z]{1,}" required /><br><br>
			<label>Dept Name:</label><br>
			<input type="text" name="dept_name" value="" required /><br><br>
			<label>Password:</label><br>
			<input type="password" name="pwd" value="" required /><br><br>
			<input type="submit" name="submit" value="Submit" />
		</form>
	</body>
</html>