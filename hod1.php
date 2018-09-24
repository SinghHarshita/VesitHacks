<style>
	th,td
	{
		padding:10px;
		border:5px solid black;
	}
	a
	{
		text-align:center;
	}
</style>
 <?php
	include("dbconn.php");
	
	if ($connection->connect_error) {
		die("Connection failed!");
	} 
	
	//$a =$_SESSION['username'];
	//$id = $_SESSION['id'];
	
	$sql="SELECT e.id,e.name,e.Email_id,b.e_id,b.r_id,b.a_pi,b.a_pr FROM employee as e INNER JOIN approval as b where e.id=b.e_id";
	$res=$connection->query($sql);

	if($res->num_rows>0)
		echo "<b>Approval Table</b><br><br>";
	{	echo "<table><text-align='center'><th>T_id</th><th>a_pi</th><th>a_pr</th><th>ID</th><th>Name</th><th>Email</th><th>Edit</th>";
		while($r=$res->fetch_array())
		{
			$a=$r['id'];
			echo "<tr colspan=2><tr><td>".$r["r_id"]."</td><td>".$a."</td><td>".$r["a_pr"]."</td><td>".$r["id"]."</td><td>".$r["name"]."</td><td>".$r["Email_id"]."</td><td><a href='h_edit.php?a=$a'>Edit</a></td></tr>";
		}
		echo "</table>";
	}

	$connection->close();
?>
