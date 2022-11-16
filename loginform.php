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


$sql = "select * from users where username='" .$user."' and password='" .$password."'";

$run = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($run);

if($row["user_type"]=="user"){
  $_SESSION["username"]== $user;
  header("Location:user_home.php");
}

elseif($row["user_type"]=="admin"){
  $_SESSION["username"]== $user;
  header("Location:admin_home.php");
  }

else{

  echo " Username or password is incorrect";
}


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="main.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
</head>
<body>
<?php require 'shownav.php';
  echo shownav();?>
  
  <br>
  <br>
  <br>

  <form action="#" method="POST">
  <h2><strong> Login </strong></h2>
  <br>
  <br>

        <label> <strong> Username</strong></label>
        <input type="text" name="username" />
    
        <label><strong>Password </strong></label>
        <input type="text" name="password"/>
  
     <input type="submit" value="Submit" >
 
    <h5>Don't have account with us: <a href="registerform.php">Sign Up</a></h5> 
    </form>
  
</body>
</html>
        
