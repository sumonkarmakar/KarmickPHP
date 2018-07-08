<?php 
include "db_config.php";
//session_start();
$error = array();
if(is_login()){
  header("Location: dashboard.php");
  exit();
}

if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['actioned']) && $_POST['actioned']=='signin'){

  if(!empty($_POST['email']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $login = login($email,$pwd);
    if($login){
      header("Location: dashboard.php");
      exit();
    }else{
      $error[] = 'Wrong username or password!';
    }
  }else{
    $error[] = 'Username and Password are required!';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Sign In</h2>
  <!-- <p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p> -->
  <?php 
  if(count($error) > 0){
    foreach($error as $er){
      ?>
      <p style="color:red;"><?php echo $er; ?></p>
      <?php
    }
  }
  ?>
  <form class="form-inline" action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div><br/><br/>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
    </div><br/><br/>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <input type="hidden" name="actioned" value="signin">
  </form>
</div>

</body>
</html>
