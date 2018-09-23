 <?php
	include("dbconn.php");
	
	if ($connection->connect_error) {
		die("Connection failed!");
	} 
	
	//$a =$_SESSION['username'];
	//$id = $_SESSION['id'];
	
	$sql="SELECT * FROM approval";
	$result=$connection->query($sql);

	$row=$result->fetch_array();
	$resultA=$row['e_id'];

	$sql="SELECT name,Email_id from employee where id='resultA'";
	$res=$connection->query($sql);

	$row=$res->fetch_array();
	
	if($result->num_rows>0)
	{	echo "<table>";
		while($r=$result->fetch_array())
		{
			echo "<tr><td>".$r["r_id"]."</td><td>".$r["a_pi"]."</td><td>".$r["a_pr"]."</td><td>".$row["name"]."</td><td>".$row["Email_id"]."</td></tr>";
		}
		echo "</table>";
	}

	$connection->close();
?>
