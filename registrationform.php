<?php

$servername = "localhost";
$username = "ics325fa2202";
$password = "6666";
$dbname = "ics325fa2202";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])){}
        
        
        $user = $_POST['userName'];
        $password = $_POST['password'];
        $email = $_POST['user_email'];
        $sql = "INSERT INTO users VALUES ('$user', '$password', '$email')";
$run = mysqli_query($conn, $sql)
echo 
"
<script>alert('Account creation was successful');</script>
";

?>







