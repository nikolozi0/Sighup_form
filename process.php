<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];

    
    $sql = "INSERT INTO signup (name, lastname, email)
    VALUES ('$name', '$lastname', '$email')";
    
    if ($conn->query($sql) === TRUE) {
      echo '<script>alert("New record created successfully")</script>';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}