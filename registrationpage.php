<?php

	include('dbconn.php');
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
        <li class="active" data-target="#loginModal" data-toggle="modal"><a href="#"><i class="fas fa-user-plus"></i>Sign-Up</a></li>
        <li><a href="#"><i class="fas fa-user"></i>Login</a></li>
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

	<div class="container" id="20>
		<div class="row">
			<div class="col-xs-12">
				<div class="modal" id="loginModal" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Sign Up</h4> 
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="inputEmail">Email</label>
										<input class="form-control" placeholder="Login Email" type="text" id="inputEmail" required="true">
									</div>
									<div class="form-group">
										<label for="inputUsername">Username</label>
										<input type="text" id="inputUsername" placeholder="Login Username" class="form-control" required="true">
									</div>
									<div class="form-group">
										<label for="designation">Designation</label>
										<select name="designation" id="designation">
											<option value="Staff">Staff</option>
											<option value="Non teaching Staff">Non teaching Staff</option>
											<option value="HOD">HOD</option>
											<option value="Dept Purchase officer">Departmental Purchase Officer</option>
											<option value="VESIT purchase officer">VESIT Purchase Officer</option>
											<option value="Principal">Principal</option>
										</select>
									</div>
									<div class="form-group">
										<label for="dept">Department</label>
										<select name="department" id="dept">
											<option value="MCA">MCA</option>
											<option value="INST">INST</option>
											<option value="ETRX">ETRX</option>
											<option value="CMPN">CMPN</option>
											<option value="EXTC">EXTC</option>
											<option value="IT">IT</option>
										</select>
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" id="password" placeholder="Login Password" class="form-control" required="true">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button class="btn btn-primary">Sign up</button>
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