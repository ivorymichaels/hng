<!DOCTYPE html>
<html>
<head>
	<title>my stage 1 task</title>
	<link rel="stylesheet" href="myfig.css">
</head>
<body>
	<div class="container">
	<h1>
		HNG INTERNSHIP 4.0
	</h1>
	<h2>BRINGING OUT THE BEST IN YOU</h2>
	<p id="hotel"><em>HOTELS.NG</em></p>
	<p>TIME: <?php
				date_default_timezone_set("GMT");
				echo date("h:i:sa");
			?>; <span id="date"> DATE: <?php echo(date("Y-m-d"))?></span></p>
	
</div>

</body>
</html>