<?php
session_start();
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
$user_id = $_POST['user_id'];
$user_type = $_POST['user_type'];
$username = $_POST['username'];
$password = $_POST['password'];
                   
$sql = "UPDATE users SET user_type = '$user_type', username= '$username',password='$password' WHERE user_id = '$user_id'";

$run = mysqli_query($conn, $sql) or die (mysqli_error());

if($run){
 
echo "Profile Changes : "; 
echo"<br>";
echo "New Username  " . $username;
echo"<br>";
echo"<br>";
echo "New password:  " . $password;
echo"<br>";
echo"<br>";
echo "New level of authorization:  " . $user_type;
echo"<br>";

} else{

    echo "Profile could not be changed ";
    
    }
    
    }
    
    
    
    
    
    
    ?>