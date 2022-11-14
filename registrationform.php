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
if (isset($_POST['submit'])){

 if (!empty($_POST['userName']) && !empty($_POST['password']) && !empty($_POST['user_email'])){
        
        
        $user = $_POST['userName'];
        $password = $_POST['password'];
        $email = $_POST['user_email'];
        $sql = "INSERT INTO users VALUES ('$user', '$password', '$email')";
$run = mysqli_query($conn, $sql) or die (mysqli _error()); 

if($run){
    echo "form was succeesful";
    } else{

echo "form was no good";

    }
}
    else{
        echo " All fields required";
    }


 }


?>







