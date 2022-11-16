
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

  <form action="login_check.php" method="POST">
  <h2><strong> Login </strong></h2>
  <br>
  <h4>
<?php 
error_reporting(0);
session_start();
session_destroy();
echo $_SESSION['loginMessage'];

?>
  </h4>
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
        
