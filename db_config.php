<?php 
session_start();
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

function get_data_by_id($id){
  $conn = connect_db();
  $sql = "SELECT * FROM student where id=".$id;
  $result = $conn->query($sql);

  $return_array = array();
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

          $return_array = $row;
      }
  } 
  return $return_array;
}

function delete_student($id){
  $conn = connect_db();
  $sql = "DELETE FROM student where id=".$id;
  $result = $conn->query($sql);
  header("Location: list.php");
}

function update_student($id,$name,$email,$address,$phone){
  $conn = connect_db();
  $sql = "UPDATE student SET Name='".$name."', Email='".$email."', Address='".$address."', Phone='".$phone."' where Id=".$id;
  $result = $conn->query($sql);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function insert_into_db($name,$email,$website,$address,$gender,$phone,$password){
  $conn = connect_db();

  $sql = "INSERT INTO student (Name, Email, Address, Gender, Phone, password)
  VALUES ('".$name."', '".$email."', '".$address."' ,'".$gender."','".$phone."','".$password."')";

  if ($conn->query($sql) === TRUE) {
      $last_insert_id = $conn->insert_id;
  } else {
      //echo "Error: " . $sql . "<br>" . $conn->error;
      $last_insert_id = 0;
  }
  return $last_insert_id;
}

function login($email,$password){
  $return = false;
  $conn = connect_db();

  $sql = "SELECT id FROM student where email='$email' and password='$password'";
  $result = $conn->query($sql);
  $return_array = array();
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

          $return_array = $row;
      }
  }
  if(is_array($return_array) && count($return_array) > 0 ){
    $_SESSION['USER_ID'] = $return_array['id'];
    return $return_array['id'];
  }else{
  return $return;
  }
}

function is_login(){
  $login_id = 0;
  if(isset($_SESSION['USER_ID']) && $_SESSION['USER_ID'] > 0){
    $login_id = $_SESSION['USER_ID'];
    return $login_id;
  }else{
    return false;
  }
}

function logout($redirect_url=false){
  if(isset($_SESSION['USER_ID']) && $_SESSION['USER_ID'] > 0){
    unset($_SESSION['USER_ID']);
    if($redirect_url && !empty($redirect_url)){
      header("Location: ".$redirect_url);
      exit();
    }
  }
}

function get_loggedin_user_id(){
  if(isset($_SESSION['USER_ID']) && $_SESSION['USER_ID'] > 0){
    return $_SESSION['USER_ID'];
  }else{
    return false;

  }
}
?>