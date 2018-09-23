<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function() {
		$("button").click(function(){
			$.get("staffAssets.php", function(data, status){
				$("#asset").html(data);
			});
		});
	});
</script>
</head>

<body>

<button>Click to view assets</button>
<p id="asset"></p>

</body>


</html>