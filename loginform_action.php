<?php 

$servername = "localhost";

$username = "ics325fa2206";

$password = "5859";

$dbname = "ics325fa2206";



session_start():




// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {

die("Connection failed: " . mysqli_connect_error());

}

if($_SERVER["REQUEST_METHOD"] == "POST"){

$user = $_POST['username'];

$password = $_POST['password'];


$sql = "select * from users where username='" .$user."' and password='" .$password."'";

$run = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($run);

if($row["user_type"]=="user"){
  $_SESSION["username"]== $user;
  header(location: user_home.php);
}

elseif($row["user_type"]=="admin"){
  $_SESSION["username"]== $user;
  header(location: admin_home.php);
  }

else{

  echo " Username or password is incorrect";
}


}

?>