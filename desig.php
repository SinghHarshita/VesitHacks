<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">


<style>
body {
    font-family: "Lato", sans-serif;
}
body{
  			background-image: url(https://i0.wp.com/vesitadmissions.ves.ac.in/wp-content/uploads/2017/03/cropped-favicon.png?fit=240%2C240&ssl=1);
  			background-position: center;
  			/*background-position: cover;*/
  			background-repeat: no-repeat;
  		}
  		html{
  			height: 100%;
  		}

.sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

h1{
	padding-left: 370px;
	padding-top: 10px;
}
</style>

<script>

	$("#demand").click(function(){
			var productname = $("#inputProductName").val();
			var numberProduct = $("#productQuantity").val();
			$.post("demand.php", {product: productname,
				number: numberProduct
			});
		});
	$("#track").click(function(){
			$.post("assetTracking.php", function(data,status){
				$("#trackHere").html(data);
			});
		});

</script>

</head>
<body>
	<nav class="navbar navbar-default">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
<!--         <span class="icon-bar"></span>
        <span class="icon-bar"></span> -->
      </button>
      <a class="navbar-brand" href="#">Asset </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Log Out</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<br><br>

<div class="sidenav">
  <a href="#" data-target="#loginModal" data-toggle="modal">Make Demand</a>
  <a href="#" data-target="" data-toggle="" id="track">Track Indent</a>
  <a href="#">Transfer Asset</a>
  <a href="#" data-target="#maintenance" data-toggle="modal">Maintenance</a>
</div>

<div class="main">
	<div class="container">
	<h1>Logged In As Staff</h1>
	<span id="trackHere"></span>
	</div>
</div>    
<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="modal" id="loginModal" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Make Demand</h4>
								<button type="close" data-dismiss="modal">&times;</button> 
							</div>	
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="productName">Product Name</label>
										<input type="text" name="name" placeholder="Enter product name" id="productName" class="form-control">
									</div>
									<div class="form-group">
										<label for="productQuantity">Quantity</label>
										<input type="text" name="number" placeholder="Enter quantity" id="productQuantity" class="form-control">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button class="btn btn-primary" id="demand" >Submit</button>
								<button class="btn btn-primary" data-dismiss="modal">Close</button>
							</div>						
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>

<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="modal" id="maintenance" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Maintenance</h4> 
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="inputProductName">Product name </label>
										<input class="form-control" placeholder="Enter Product Name" type="text" id="inputProductName">
									</div>
									<div class="form-group">
										<label for="complaint">Complaints</label>
										<input type="text" id="complaint" placeholder="Enter a complaint,if there may be any." class="form-control">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button class="btn btn-primary">Submit</button>
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
