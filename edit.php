<?php
include "db_config.php";
// define variables and set to empty values
$email = $phone = $name = $address = $id = "";
$emailErr = $phoneErr = $nameErr = $addressErr = $idErr = "";
if(!is_login()){
	header("Location: signin.php");
  	exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["name"])){
		$nameErr = "Name is Required";
	}else{
		$name = test_input($_POST["name"]);
	}

	if(empty($_POST["email"])){
		$emailErr = "Email is Required";
	}else{
		$email = test_input($_POST["email"]);
	}

	if(empty($_POST["address"])){
		$addressErr = "Address is Required";
	}else{
		$address = test_input($_POST["address"]);
	}

	if(empty($_POST["phone"])){
		$phoneErr = "Phone is Required";
	}else{
		$phone = test_input($_POST["phone"]);
	}

	if(empty($_POST["id"])){
		$idErr = "Id is Required";
	}else{
		$id = test_input($_POST["id"]);
	}

	update_student($id,$name,$email,$address,$phone);
}

if(isset($_GET['id']) && !empty($_GET['id'])){
	$user_data = get_data_by_id($_GET['id']);
}
?>
<!DOCTYPE html>
<html>
	<head>
	<style type="text/css">
		.error{
			color: #FF0000;
		}
	</style>
		<title></title>
	</head>
	<body>
	<h2>Registration form</h2>
	<p><span class="error"></span></p>
	<form method="post" action="">
		<h1>This is edit page</h1>
		Name:<input type="text" name="name" value="<?php echo $user_data['Name'];?>">
		<br><br>
		Address: <textarea name="address" rows="5" cols="20"><?php echo 
		$user_data['Address']; ?></textarea>
		<br><br>
		Phone: <input type="text" name="phone" value="<?php echo $user_data['Phone'];?>">
		<br><br>
		Email: <input type="text" name="email" value="<?php echo $user_data['Email'];?>">
		<br><br>
		<input type="hidden" name="id" value="<?php echo $user_data['Id'];?>">
		<button type="submit">Submit</button>
	</form>
	</body>
</html>