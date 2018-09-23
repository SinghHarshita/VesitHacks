<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function() {
		$("#btn1").click(function(){
			$.get("hod1.php", function(data, status){
				$("#hod_dash").html(data);
			});
		});
		$("#btn2").click(function(){
			$.get("generate_hod_i.php", function(data, status){
				$("#generate_hod_i").html(data);
			});
		});
	});
</script>
</head>

<body>

<button id="btn1">go to dash</button>
<p id="hod_dash"></p>
<button id="btn2">generate note</button>
<p id="generate_hod_i"></p>

</body>


</html>