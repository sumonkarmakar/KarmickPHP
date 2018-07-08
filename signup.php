<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
		
	</head>
	<body>
	<div class="container">
	<h2>Registration form</h2>
	<p><span class="error"></span></p>
	<form method="post" action="dashboard.php">
		<div class="a">
			<label>Name:</label>
			<input type="text" name="name">	
		</div>
		<div class="a">
			<label>
				Address:
			</label>
			<textarea name="address" rows="5" cols="20"></textarea>
		</div>
		 <div class="a">
		 	<label>
		 		Pincode:
		 	</label>
		 	<input type="text" name="pincode">
		 </div>
		 <div class="a">
		 	<label>City: </label>
		 	<input type="text" name="city">
		 </div>
		<button type="Submit">Submit</button>
	</form>
	</div>
	</body>
</html>