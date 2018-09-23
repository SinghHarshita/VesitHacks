<?php

	session_start();
	error_reporting(0);
	include('dbconn.php');
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
				header('location:amdinview.php');
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


<!DOCTYPE html>
<html>
<head>
  	<title>Sign In</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="loginstyle.css">
  	<link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>
<body>

	<nav class="navbar navbar-default">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Asset Manager</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Home <span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fas fa-user-plus"></i>Sign-Up</a></li>
        <li class="active" data-target="#loginModal" data-toggle="modal"><a href="#"><i class="fas fa-user"></i>Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

  <div class="container">
  	<div class="row">
    	<div class="col-lg-12">
    		<div id="content">
    			<h1>Asset Manager</h1>
    		    <hr>
    		</div>
    	</div>
    </div>
  </div>


	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="modal" id="loginModal" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Login</h4> 
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="inputUserName">Username </label>
										<input class="form-control" placeholder="Login Username" type="text" id="inputUserName">
									</div>
									<div class="form-group">
										<label for="inputPassword">Password</label>
										<input type="Password" id="inputPassword" placeholder="Login Password" class="form-control">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button class="btn btn-primary">Login</button>
								<button class="btn btn-primary" data-dismiss="modal">Close</button>
							</div>
						</div>						
					</div>
				</div>	
			</div>
		</div>
	</div>
</body>
</html>