
<?php

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

if($_SERVER["REQUEST_METHOD"] == "POST"){

$user = $_POST['username'];

$password = $_POST['password'];


$sql = "INSERT INTO users ( username, password) VALUES ('$user', '$password')";

$run = mysqli_query($conn, $sql) or die (mysqli_error());

if($run){
 
echo "Your User info"; 
echo"<br>";
echo "Your Username is :  " . $user;
echo"<br>";



} else{

echo "form was no good";

}

}






?>