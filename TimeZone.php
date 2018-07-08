<!DOCTYPE html>
<html>
<head>
	<title>Time Zone</title>
</head>
<body>
<?php 
	date_default_timezone_set("India/Kolkata");
	echo "The time is " . date("h:i:sa");
 ?>
</body>
</html>