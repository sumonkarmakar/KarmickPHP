<?php session_start();
if(isset($_SESSION['USER_ID']) && !empty($_SESSION['USER_ID'])){
?>
<!DOCTYPE html>
<?php
include('db_config.php');
$user_id = $_SESSION['USER_ID'];
$user_data = get_data_by_id($user_id);

?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Welcome <?php echo $user_data['Name']; ?> to Thank You Page</h1>
		<a href="logout.php">log out</a>
	</body>
</html>
<?php }else{
	  header("Location: index1.php");
} ?>