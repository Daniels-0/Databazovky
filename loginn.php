<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);
// print_r($result);
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    echo "id: " . $row["id"] . "</br>";
    echo "username: " . $row["username"] . "</br>";
    echo "password: " . $row["password"] . "</br>";
  }
}else{
  echo " 0 results";
}
?>