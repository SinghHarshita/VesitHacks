

<?php

	session_start();
	echo "<a href='adminview.php'>Go To Home Page</a><br><br>";
	error_reporting(0);
	if(($_SESSION['username']!='2017.jay.bendre@ves.ac.in'))
	{
		header('location:logout.php');
	}
	if($_POST['submit'])
	{
		/*$mysql_host='localhost';
		$mysql_user='root';
		$mysql_password='root';
		$connection = new mysqli($mysql_host,$mysql_user,$mysql_password,'asset_tracker');*/
		include('dbconn.php');
		$a = $_POST['id'];
		$b = $_POST['name'];
		$c = $_POST['email_id'];
		$d = $_POST['password'];
		$e = $_POST['dept'];
		$f = $_POST['designation'];
		$qur = "UPDATE employee SET id = '$a',name = '$b',Email_id = '$c',Password = '$d',dept_name = '$e',designation = '$f' where id ='$a'";
		$connection->query($qur);
		header('location:users.php');
		$connection->free();
	}
?>

<html>
	<head>
	</head>
	<body>
		<form action = "" method = "POST" >
			ID:
			<input type="text" name="id" value="<?php echo $_GET['a']; ?>" /><br><br>
			Name:
			<input type="text" name="name" value="<?php echo $_GET['b']; ?>" /><br><br>
			Email-Id :
			<input type="text" name="email_id" value="<?php echo $_GET['c']; ?>" /><br><br>
			Password :
			<input type="text" name="password" value="<?php echo $_GET['d']; ?>" /><br><br>
			Department : 
			<input type="text" name="dept" value="<?php echo $_GET['e']; ?>" /><br><br>
			Designation : 
			<input type="text" name="designation" value="<?php echo $_GET['f']; ?>" /><br><br>
			<input type="submit" name="submit" value="submit"/>
		</form>
	</body>
</html>

