<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

<button id="btn1">go to dash</button>
<p id="purchase_incharge_dash"></p>
<button id="btn2">generate note</button>
<p id="generate_pi"></p>

</body>


</html>