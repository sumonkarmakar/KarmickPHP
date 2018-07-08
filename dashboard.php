<?php
include "db_config.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php 
			$name = '';
			$address = '';
			$pincode = '';
			$city = '';

			if(isset($_POST['name'])){
				$name = $_POST['name'];
			}
			if(isset($_POST['address'])){
				$address = $_POST['address'];
			}
			if(isset($_POST['pincode'])){
				$pincode = $_POST['pincode'];
			}
			if(isset($_POST['city'])){
				$city = $_POST['city'];
			}
		 ?>
	</head>
	<body>
	<?php if(is_login()){ ?>
	<a href="logout.php">Log out</a>
	<?php } ?>
		<form method="post">
			Name: <?php echo $name;?>
			<br><br>
			Address: <?php echo $address;?>
			<br><br>
			Pincode: <?php echo $pincode; ?>
			<br><br>
			City: <?php echo $city; ?>
			<br><br>
			<a href="signup.php">Reset</a>
			<a href="edit.php?id=<?php echo get_loggedin_user_id(); ?>">Edit</a>
		</form>
	</body>
</html>