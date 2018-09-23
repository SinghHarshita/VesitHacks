<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function() {
		$("#btn1").click(function(){
			$.get("staffAssets.php", function(data, status){
				$("#asset").html(data);
			});
		});
		$("#btn2").click(function(){
			$.get("assetTracking.php", function(data, status){
				$("#track").html(data);
			});
		});
		$("#btn3").click(function(){
			$.get("manage.php", function(data, status){
				$("#track").html(data);
			});
		});
		$("#btn2").click(function(){
			$.get("transfer.php", function(data, status){
				$("#track").html(data);
			});
		});
	});
</script>
</head>

<body>

<button id="btn1">Click to view assets</button>
<p id="asset"></p>
<button id="btn2">Track assets</button>
<p id="track"></p>
<button id="btn3">Manage Assets</button>
<p id="manage"></p>
<button id="btn4">Transfer Assets</button>
<p id="transfer"></p>

</body>


</html>