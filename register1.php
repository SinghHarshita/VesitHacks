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



<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			function checkEmail() {

		    var email = document.getElementById('txtEmail');
		    var filter= /^([a-zA-Z0-9_\-\.])+\@ves.ac.in$/;
		    var messageDisplay=document.querySelector("#message");

		    if (!filter.test(email.value)) {
		    messageDisplay.textcontent="Enter a valid VES Email-ID."
		    email.focus;
		    return false;
 }
}
		</script>
	</head>
	<body>
		<p>All Fileds are Mandatory....</p><br><br>
		<form action="" method="post" enctype="multipart/form-data">
			<label for="email">Email-ID:</label><br>
			<input type="text" id="email" name="email_id" value="" required />
			<span id="message"></span><br><br>

			<label for="name">Name:</label><br>
			<input type="text" id="name" name="name" value="" pattern="[a-zA-Z]{3,}" required /><br><br>

			<label for="desig">Designation:</label><br>
			<select id="desig" name="designation">
				<option value="staff">Staff</option>
				<option value="nonTeachingStaff">Non-teaching Staff</option>
				<option value="dpo">Department Purchase Officer</option>
				<option value="po">Purchase Officer</option>
				<option value="hod">HOD</option>
				<option value="principal">Principal</option>
			</select>
			 
			<label for="deptname">Dept Name:</label><br>
			<input type="text" id="deptname" name="dept_name" value="" required /><br><br>

			<label for="password">Password:</label><br>
			<input type="password" id="password" name="pwd" value="" required /><br><br>
			
			<input type="submit" name="submit" value="Submit" onclick='Javascript:checkEmail();'/>
		</form>
	</body>
</html>