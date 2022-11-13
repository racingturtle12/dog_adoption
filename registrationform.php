<?php
$user = $_POST['userName'];
$password = $_POST['password'];
$email = $_POST['user_email'];



$servername = "localhost";
$username = "ics325fa2206";
$password = "5859";
$dbname = "ics325fa2206";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (userName, password, user_email)
VALUES ($user, $password, $email);
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
