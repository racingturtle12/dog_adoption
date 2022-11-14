
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

if($_SERVER["REQUEST_METHOD"] == "POST"){
 $user_id =  $_POST['user_id']; 
$user = $_POST['userName'];

$password = $_POST['password'];

$email = $_POST['user_email'];

$sql = "INSERT INTO users ( user_id,  userName, password, user_email) VALUES ( '$user_id', '$user', '$password', '$email')";

$run = mysqli_query($conn, $sql) or die (mysqli_error());

if($run){
 
echo "Your User info"; 
echo"<br>";
echo "Your UserId:  " . $user_id;
echo"<br>";
echo "Your UserName:  " . $username;
echo"<br>";
echo "Email used:  " . $email;


} else{

echo "form was no good";

}

}






?>