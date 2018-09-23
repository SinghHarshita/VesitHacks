<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="loginstyle.css">
  	<style type="text/css">
  		body{
  			background-image: url(https://i0.wp.com/vesitadmissions.ves.ac.in/wp-content/uploads/2017/03/cropped-favicon.png?fit=240%2C240&ssl=1);
  			background-position: center;
  			/*background-position: cover;*/
  			background-repeat: no-repeat;
  		}
  		html{
  			height: 100%;
  		}
  		</style>


  	<script>
	$(document).ready(function() {
		$("#btn1").click(function(){
			$.get("purchase_incharge_dash.php", function(data, status){
				$("#purchase_incharge_dash").html(data);
			});
		});
		$("#btn2").click(function(){
			$.get("generate_pi.php", function(data, status){
				$("#generate_pi").html(data);
			});
		});
	});
</script>
</head>
<body>
	  <nav class="nav navbar-default">
	  	<div class="container">
	  		<div class="navbar-header">
      			<a class="navbar-brand" href="#">ASSET MANAGER</a>
    		</div>
 	  		<button class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
	  			<span class="icon-bar"></span>
	  			<span class="icon-bar"></span>
	  			<span class="icon-bar"></span>
	  		</button>
	  		<div class="collapse navbar-collapse" id="collapse">
	  			<ul class="nav navbar-nav">
	  				<li><a href="#"><span class="glyphicon glyphicon-home"></span>HOME</a></li>
	  			</ul>
	  			<ul class="nav navbar-nav navbar-right">
	  				<li class="active" data-target="#loginModal" data-toggle="modal"><a href="#"><span class="glyphicon glyphicon-user"></span>SIGN IN</a></li>
	  				<li><a href="#"><span class="glyphicon glyphicon-user-add"></span>SIGN UP</a></li>
	  			</ul>
			</div>
	  	</div>
	  </nav>

	  <div class="container">
	  	<h1 style="color:#000000;text-align:center; margin-top:200px">Welcome User!!</h1>
	  	<h2 style="color:#000000;text-align:center">Please select an action</h2>
	  	<p id="purchase_incharge_dash"></p>
	  	<div class="col-sm-3"></div>
	  	<button class="btn btn-primary col-sm-3" id="btn1">Go to Dash</button>
		<p id="generate_pi"></p>
		<button class="btn btn-success col-sm-3" id="btn2">Generate Note</button>

	  </div>

	</body>
	</html>

	  