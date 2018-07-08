<?php

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

$sql = "SELECT id, name, email, address, phone FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " | " . $row["email"]. " | " . $row["address"]. " | " . $row["phone"]. "<br>";
        ?>
        <a href="view_data.php?id=<?php echo $row['id'];?>">view</a>
        <?php
    }
} else {
    echo "0 results";
}

$conn->close();
?>