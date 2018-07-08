<?php 
include "db_config.php";
//session_start();
//$_SESSION['USER_ID'] = session_id();
//print_r($_SESSION);
//unset($_SESSION['USER_ID']);  
//print_r($_SESSION);  
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $addressErr = $genderErr = $websiteErr = $phoneErr =        
 $passwordErr = "";
$name = $email = $gender = $comment = $website = $phone = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["phone"])) {
    $phone = "";
  } else {
    $phone = test_input($_POST["phone"]);
  }

   if (empty($_POST["password"])) {
    $password = "";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  $last_insert_id = insert_into_db($name,$email,$website,$address,$gender,$phone,$password);
  if($last_insert_id > 0){
    $_SESSION['USER_ID'] = $last_insert_id;
    header("Location: thankyou.php");
    exit();
  }
  
}


/*
function connect_db(){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = 'student';

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
*/

?>
 <h2>PHP Form Validation Example</h2>
 <p><span class="error">* required field</span></p>
 <form method="post" action="">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Address: <textarea name="address" rows="5" cols="40"></textarea>
  <span class="error"> <?php echo $addressErr; ?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Phone: <input type="text" name="phone">
  <span class="error"><?php echo $phoneErr;?></span>
  <br><br>
  Password: <input type="password" name="password">
  <span class="error"><?php echo $passwordErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>