<?php
session_start();
error_reporting(0);
if($_POST['submit'])
	{
		/*$mysql_host='localhost';
		$mysql_user='root';
		$mysql_password='root';
		$connection = new mysqli($mysql_host,$mysql_user,$mysql_password,'asset_tracker');*/
		include('dbconn.php');
		$a = $_POST['id'];
		$b= $_POST['name'];
		$qur = "UPDATE approval SET a_pi = '$b'where id ='$a'";
		$connection->query($qur);
		header('location:hod1.php');
		$connection->free();
	}
?>

<html>
	<head>
	</head>
	<body>
		<form action = "" method = "POST" >
			T_ID:
			<input type="text" name="id" value="<?php echo $_GET['a']; ?>" /><br><br>
			Approval Status:
			<input type="text" name="name" value="<?php echo $_GET['b']; ?>" /><br><br>
			<input type="submit" name="submit" value="submit"/>
		</form>
	</body>
</html>
